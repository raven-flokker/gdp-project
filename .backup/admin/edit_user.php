<?php
	//Страница редактирования пользователя
	include "../inc/db.php";

	if (!empty($_SESSION['auth']) and $_SESSION['status'] == 'Admin') {
		function getUser($link)
		{
			$title = 'Admin Редактирование пользователя';
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$query = "SELECT * FROM users WHERE id='$id'";
				$result = mysqli_query($link, $query) or die(mysqli_error($link));
				$page = mysqli_fetch_assoc($result);

				if ($page) {
					if (isset($_POST['login']) and isset($_POST['first_n']) and isset($_POST['last_n']) and isset($_POST['middle_n']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['country'])) {
						$login = $_POST['login'];
						$first_n = $_POST['first_n'];
						$last_n = $_POST['last_n'];
						$middle_n = $_POST['middle_n'];
						$email = $_POST['email'];
						$phone = $_POST['phone'];
						$country = $_POST['country'];
					} else {
						$login = $page['login'];
						$first_n = $page['first_n'];
						$last_n = $page['last_n'];
						$middle_n = $page['middle_n'];
						$email = $page['email'];
						$phone = $page['phone'];
						$country = $page['country'];
					}

					ob_start();
					include 'elems/form_user.php';
					$content = ob_get_clean();
				} else {
					$content = 'Page not found';
				}
			} else {
				$content = 'Page not found';
			}
			include 'elems/layouts.php';//инклюдим макет страницы
		}

		function addUser($link)
		{
			if (isset($_POST['login']) and isset($_POST['first_n']) and isset($_POST['last_n']) and isset($_POST['middle_n']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['country'])) {
				$login = mysqli_real_escape_string($link, $_POST['login']);
				$first_n = mysqli_real_escape_string($link, $_POST['first_n']);
				$last_n = mysqli_real_escape_string($link, $_POST['last_n']);
				$middle_n = mysqli_real_escape_string($link, $_POST['middle_n']);
				$email = mysqli_real_escape_string($link, $_POST['email']);
				$phone = mysqli_real_escape_string($link, $_POST['phone']);
				$country = mysqli_real_escape_string($link, $_POST['country']);

				if (isset($_GET['id'])) {
					$id = $_GET['id'];

					$query = "SELECT * FROM users WHERE id=$id";
					$result = mysqli_query($link, $query) or die(mysqli_error($link));
					$page = mysqli_fetch_assoc($result);
					var_dump($page);
					if ($page['login'] !== $login) {
						$query = "SELECT COUNT(*) as count FROM users WHERE id='$id'";
						$result = mysqli_query($link, $query) or die(mysqli_error($link));
						$isPage = mysqli_fetch_assoc($result)['count'];

						if ($isPage == 1) {
							$_SESSION['message'] = [
								'text' => 'User with login exist!',
								'statuse' => 'alert-danger'
							];
						}
					}

					$query = "UPDATE users SET login='$login', first_n='$first_n', last_n='$last_n', middle_n='$middle_n', email='$email', phone='$phone', country='$country' WHERE id='$id'";
					mysqli_query($link, $query) or die(mysqli_error($link));

					$_SESSION['message'] = [
						'text' => "User '{$page['login']}' edit success!",
						'statuse' => 'alert-success'
					];

					header('Location: /admin/');
					die();
				}
			}
		}

		addUser($link);
		getUser($link);
	}else{
		header("Location: ../login");exit;
	}