<?php
	if (isset($_SESSION['auth'])) {

		if ($_SESSION['id'] == $_GET['id']) {
			$query = "SELECT * FROM members";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));


			if (isset($_SESSION['fio']) /*and isset($_POST['article']) and isset($_POST['author']) and isset($_POST['organization']) and isset($_POST['abstracts']) and isset($_POST['link'])*/) {
				$fio = $_SESSION['fio'];

//				$article = $_POST['article'];
//				$author = $_POST['author'];
//				$organization = $_POST['organization'];
//				$abstracts = $_POST['abstracts'];
//				$link = $_POST['link'];

			} else {
//				$article = '';
				$fio = '';
//				$author = '';
//				$organization = '';
//				$abstracts = '';
//				$link = '';
			}

			include 'p_form.php';

			if (isset($_POST['article']) and isset($_POST['author']) and isset($_POST['organization']) and isset($_POST['abstracts']) and isset($_POST['link'])) {
				$article = mysqli_real_escape_string($link, $_POST['article']);
				$author = mysqli_real_escape_string($link, $_POST['author']);
				$organization = mysqli_real_escape_string($link, implode(", ", $_POST['organization']));
				$abstracts = mysqli_real_escape_string($link, $_POST['abstracts']);
				$links = mysqli_real_escape_string($link, $_POST['link']);

				$user_id = $_SESSION['id'];

				$query = "SELECT COUNT(*) as count FROM members WHERE article='$article'";
				$result = mysqli_query($link, $query) or die(mysqli_error($link));
				$isPage = mysqli_fetch_assoc($result)['count'];

				if ($isPage) {
					$_SESSION['message'] = [
						'text' => 'Article with title exist!',
						'statuse' => 'alert-danger'
					];
				} else {
					
					$query = "INSERT INTO members(user_id, author, article, abstracts, link) VALUES('$user_id', '$author', '$article', '$abstracts', '$links')";
					mysqli_query($link, $query) or die(mysqli_error($link));

					$memb_id = mysqli_insert_id($link);
					$query = "INSERT INTO organization(memb_id, id, org_user) VALUES ('$memb_id', '$user_id', '$organization')";
					mysqli_query($link, $query) or die(mysqli_error($link));
					$_SESSION['message'] = [
						'text' => 'Организация успешно добавлена',
						'statuse' => 'success'
					];
					header('Location: /members');die();
				}
//				include 'p_form.php';
			} else {
				echo '';
			}
		}
	} else {
		echo 'Авторизуйтесь';
	}
