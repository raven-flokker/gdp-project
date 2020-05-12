<?php
	include "../inc/db.php";

	if (!empty($_SESSION['auth']) and $_SESSION['status'] == 'Admin') {
		function editMembTables($link) {
			$title = 'Admin Редактирование Members';
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$query = "SELECT * FROM members WHERE memb_id='$id'";
				$result = mysqli_query($link, $query) or die(mysqli_error($link));
				$page = mysqli_fetch_assoc($result);

				if ($page) {
					if (isset($_POST['article_ru']) and isset($_POST['f_name_a_ru']) and isset($_POST['l_name_a_ru']) and isset($_POST['m_name_a_ru']) and isset($_POST['email_a_ru']) and isset($_POST['abstract_ru']) and isset($_POST['links_ru']) and isset($_POST['organization_ru'])) {
						$article_ru = $_POST['article_ru'];
						$f_name_a_ru = $_POST['f_name_a_ru'];
						$l_name_a_ru = $_POST['l_name_a_ru'];
						$m_name_a_ru = $_POST['m_name_a_ru'];
						$email_a_ru = $_POST['email_a_ru'];
						$abstract_ru = $_POST['abstract_ru'];
						$links_ru = $_POST['links_ru'];
						$organization_ru = implode(", ", $_POST['organization_ru']);
					} else {
						//При условии если поля пустые оставляем их пустыми. Так же для избезания ошибки
						$article_ru = $page['article_ru'];
						$f_name_a_ru = $page['f_name_a_ru'];
						$l_name_a_ru = $page['l_name_a_ru'];
						$m_name_a_ru = $page['m_name_a_ru'];
						$email_a_ru = $page['email_a_ru'];
						$abstract_ru = $page['abstracts_ru'];
						$links_ru = $page['links'];
						$organization_ru = $page['org_user'];
					}

					ob_start();
					include 'elems/membedit.php';
					$content = ob_get_clean();
				} else {
					$content = 'Page not found';
				}
			}
			include 'elems/layouts.php';//инклюдим макет страницы
		}

		function addMembers($link) {
			if (isset($_POST['stend']) and isset($_POST['article_ru']) and isset($_POST['f_name_a_ru']) and isset($_POST['l_name_a_ru']) and isset($_POST['m_name_a_ru']) and isset($_POST['email_a_ru']) and isset($_POST['abstract_ru']) and isset($_POST['links_ru']) and isset($_POST['organization_ru'])) {

				$stand = mysqli_real_escape_string($link, $_POST['stend']);
				$article_ru = mysqli_real_escape_string($link, $_POST['article_ru']);
				$f_name_a_ru = mysqli_real_escape_string($link, implode(", ", $_POST['f_name_a_ru']));
				$l_name_a_ru = mysqli_real_escape_string($link, implode(", ", $_POST['l_name_a_ru']));
				$m_name_a_ru = mysqli_real_escape_string($link, implode(", ", $_POST['m_name_a_ru']));
				$email_a_ru = mysqli_real_escape_string($link, implode(", ", $_POST['email_a_ru']));
				$abstract_ru = mysqli_real_escape_string($link, $_POST['abstract_ru']);
				$links_ru = mysqli_real_escape_string($link, implode(", ", $_POST['links_ru']));
				$organization_ru = implode(", ", $_POST['organization_ru']);

				if (isset($_GET['id'])) {
					$id = $_GET['id'];

					$query = "SELECT * FROM members WHERE memb_id=$id";
					$result = mysqli_query($link, $query) or die(mysqli_error($link));
					$memb = mysqli_fetch_assoc($result);
					var_dump($memb);
					if ($memb['article_ru'] !== $memb) {
						$query = "SELECT COUNT(*) as count FROM members WHERE memb_id='$id'";
						$result = mysqli_query($link, $query) or die(mysqli_error($link));
						$isPage = mysqli_fetch_assoc($result)['count'];

						if ($isPage == 1) {
							$_SESSION['message'] = [
								'text' => 'Название такой статьи уже есть!',
								'statuse' => 'alert-danger'
							];
						}
					}

					$query = "UPDATE members SET stand='$stand',f_name_a_ru='$f_name_a_ru', l_name_a_ru='$l_name_a_ru', m_name_a_ru='$m_name_a_ru', article_ru='$article_ru', email_a_ru='$email_a_ru', abstracts_ru='$abstract_ru', links='$links_ru', org_user='$organization_ru' WHERE memb_id='$id'";
					mysqli_query($link, $query) or die(mysqli_error($link));

					$_SESSION['message'] = [
						'text' => "Member '{$memb['article_ru']}' edit success!",
						'statuse' => 'alert-success'
					];

					header('Location: /admin/');
					die();
				}
			}
		}
		addMembers($link);
		editMembTables($link);

	}else{
		header("Location: ../login");exit;
	}