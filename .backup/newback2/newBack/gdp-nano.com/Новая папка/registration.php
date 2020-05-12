<?php
	if (isset($_SESSION['auth'])) {
	header('Location: /');
	die();
} else {
	$email_v = '';
	$password = '';
	if (!empty($_POST['login']) and !empty($_POST['fio']) and !empty($_POST['password']) and !empty($_POST['confirm']) and !empty($_POST['email'])) {

		if ($_POST['password'] == $_POST['confirm']) {
			$login = htmlspecialchars($_POST['login']);
			if(strlen($login) > 30) {
				$errors[] = LANG_ERROR1;
			}
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

			$query = "SELECT * FROM `users` WHERE login='$login'";

			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			$user = mysqli_fetch_assoc($result);
			if (empty($user)) {

				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$organization = $_POST['organization'];
				$fio = $_POST['fio'];


				if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$query = "INSERT INTO users SET login='$login', fio='$fio', pass='$password', email='$email', phone='$phone', organization='$organization', status='0', banned='0', date=NOW()";
					mysqli_query($link, $query) or die(mysqli_error($link));

					$_SESSION['message'] = ['text' => 'Success'];
					//Пишем в сессию пометку об успешной авторизации
					$_SESSION['auth'] = true;
					$id = mysqli_insert_id($link);
					$_SESSION['id'] = $id;
					$_SESSION['login'] = $login;
					$_SESSION['status'] = 'user';
					$_SESSION['statuse'] = 'Success';
					header('Location: /');
					die();
				}else{
					$email_v = LANG_ERROR2;
				}

			} else {
				echo LANG_ERROR3 .$login . LANG_ERROR4 ;
			}
		}else{
			echo 'Пароли не совпадают';
		}
	}

	if (isset($_POST['login']) and isset($_POST['email'])/* and isset($_POST['trip-start'])*/) {
		$login = $_POST['login'];
		$email = $_POST['email'];
//		$trip_start = $_POST['trip-start'];

	} else {
		$login = '';
		$email = '';
//		$trip_start = '1990-07-22';
	}
?>
<!--Подключение обработчика формы-->

<form id='forma' action='' method='POST'>
	<div class="form-group">
		<label for="exampleInputLogin1"><?=LANG_LOGINE?></label>
		<input class="form-control" id = "exampleInputLogin1" type="text" placeholder="<?=LANG_LOGINE?>" name='login'>
	</div>
	<div class="form-group">
		<label for="exampleInputName1"><?=LANG_FNAME?></label>
		<input class="form-control" id = "exampleInputName1" type="text" placeholder="<?=LANG_FNAME?>" name='fio'>
	</div>
	<div class="form-group">
    	<label for="exampleInputEmail1"><?=LANG_EMAIL?></label>
    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" name='email'>
    	<small id="emailHelp" class="form-text text-muted"><?=LANG_EMAILS?></small>
	</div>
	
	<div class="form-group">
    	<label for="exampleInputPhone1"><?=LANG_PHONEN?></label>
    	<input type="phone" class="form-control" id="exampleInputPhone1" aria-describedby="phoneHelp" placeholder="+7911xxxxxxx" name='phone'>
    	<small id="phoneHelp" class="form-text text-muted"><?=LANG_PHONEH?></small>
	</div>
	
	<div class="form-group">
    <label for="exampleInputOrganization1"><?=LANG_ORGAN?></label>
    <input type="text" class="form-control" id="exampleInputOrganization1" aria-describedby="organizationHelp" name='organization'>
    
  </div>
	
  <div class="form-group">
    <label for="exampleInputPassword1"><?=LANG_PASSWORD?></label>
    <input type="password" class="form-control" id="exampleInputPassword1" name='password'>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword2"><?=LANG_CONFPASSWORD?></label>
    <input type="password" class="form-control" id="exampleInputPassword2" name='confirm'>
  </div>
  
  <button type="submit" class="btn btn-primary"><?=LANG_BUTTONREG?></button>
</form>
<?php
	}
	?>