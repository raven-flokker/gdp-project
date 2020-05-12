<?php
	if (isset($_SESSION['auth'])) {
		echo "<p>" .LANG_AUTH1. " </p>" . $_SESSION['login'];

	} else {
		if (!empty($_POST['email']) or !empty($_POST['login'])) {
			if (isset($_POST['email'])) {
				$email = $_POST['email'];
			} else {
				$email = '';
			}
//			$email = $_POST['email'];
//			$login = $_POST['login'];

			$query = "SELECT * FROM `users` WHERE email='$email'";
			$result = mysqli_query($link, $query);
			$user = mysqli_fetch_assoc($result);

			if (!empty($user)) {
				$hash = $user['pass']; // соленый пароль из БД
				if ($user['banned'] != 1) {
					if (password_verify($_POST['password'], $hash)) {
						// Пользователь прошел авторизацию, выполним какой-то код
						// $_SESSION['message'] = ['text' => LANG_AUTH];

						$_SESSION['login'] = $user['login'];
						$_SESSION['fio'] = $user['fio'];
						$_SESSION['auth'] = true;
						$_SESSION['id'] = $user['id'];
						if ($user['status'] == '0'){
							$stat = 'user';
						}else{
							if ($user['status'] == '3'){
								$stat = 'Moder';
							}else{
								$stat = 'Admin';
							}
						}
						$_SESSION['statuse'] = 'success';
						$_SESSION['status'] = $stat;
						$id = $_SESSION['id'];
						exit("<meta http-equiv='refresh' content='0; url= />");
					}
				}else{
					echo LANG_BAN;
				}
			} else {
				// Пользователь неверно ввел логин или пароль, выполним какой-то код
				echo 'Error';
			}

		}

		include 'form.php';
	}