<?php
	if (isset($_SESSION['auth'])) {
	 header('Location: /');
	 die();
//		echo 'not';
} else {
	$email_v = '';
	$password = '';
	if (!empty($_POST['login']) and !empty($_POST['first_n']) and !empty($_POST['password']) and !empty($_POST['confirm']) and !empty($_POST['email'])) {

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
				//$organization = $_POST['organization'];
				$first_n = $_POST['first_n'];
				$last_n = $_POST['last_n'];
				$middle_n = $_POST['middle_n'];
				$country = $_POST['country'];


				if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

					$query = "INSERT INTO users SET login='$login', first_n='$first_n', last_n='$last_n', middle_n='$middle_n', pass='$password', email='$email', phone='$phone', country='$country', status='0', banned='0', date=NOW()";
					mysqli_query($link, $query) or die(mysqli_error($link));

					
					//Пишем в сессию пометку об успешной авторизации
				// 	$_SESSION['auth'] = true;
				// 	$id = mysqli_insert_id($link);
				// 	$_SESSION['id'] = $id;
				// 	$_SESSION['login'] = $login;
				// 	$_SESSION['fio'] = $fio;
				// 	$_SESSION['status'] = 'user';
			 //	$_SESSION['message'] = ['statuse' => 'Success'];
				$_SESSION['message'] = ['text' => 'Вы успешно зарегистрировались'];
				// 	exit("<meta http-equiv='refresh' content='0; url= /profile?id=$id'>");
				//exit("<meta http-equiv='refresh' content='0; url= /login'>");
				header("Location: login");exit;
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

	if (isset($_POST['login']) and isset($_POST['email']) and isset($_POST['first_n']) and isset($_POST['last_n']) and isset($_POST['middle_n'])) {
		$login = $_POST['login'];
		$email = $_POST['email'];
		$first_n = $_POST['first_n'];
		$last_n = $_POST['last_n'];
		$middle_n = $_POST['middle_n'];
		$country = $_POST['country'];

	} else {
		$login = '';
		$email = '';
		$first_n = '';
		$last_n = '';
		$middle_n = '';
		$country = '';
	}
?>
<!--Подключение обработчика формы-->
<div class="form">
<form class="form-horizontal" role="form" action='' method='POST'>
    <div class="align-middle">
	<div class="form-group">
		<label for="exampleInputLogin1"><?=LANG_LOGINE?></label>
		<input class="form-control" id = "exampleInputLogin1" type="text" value="<?=$login?>" placeholder="<?=LANG_LOGINE?>" name='login'>
	</div>
	<div class="form-group">
		<label for="exampleInputName1"><?=LANG_FULLNAME?></label>
		<div class="row">
			<div class="col">
				<input type="text" class="form-control" value="<?=$first_n?>" placeholder="<?=LANG_FNAME?>" name="first_n">
			</div>
			<div class="col">
				<input type="text" class="form-control" value="<?=$last_n?>" placeholder="<?=LANG_LNAME?>" name="last_n">
			</div>
		</div>
	</div>
		<div class="form-group">
			<input class="form-control" id="exampleInputName1" type="text" value="<?=$middle_n?>" placeholder="<?=LANG_MNAME?>" name='middle_n'>
		</div>

	<div class="form-group">
    	<label for="exampleInputEmail1"><?=LANG_EMAIL?></label>
    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$email?>" placeholder="name@example.com" name='email'>
    	<small id="emailHelp" class="form-text text-muted"><?=LANG_EMAILS?></small>
	</div>
	
	<div class="form-group">
    	<label for="exampleInputPhone1"><?=LANG_PHONEN?></label>
    	<input type="tel" class="form-control" id="exampleInputPhone1" aria-describedby="phoneHelp" placeholder="" name='phone1'>
    	<small id="phoneHelp" class="form-text text-muted"><?=LANG_PHONEH?></small>
	</div>
		<div class="form-group row">
			<label class="col-lg-3 col-form-label form-control-label"><?=LANG_COUNTRY?></label>
			<div class="col-lg-9">
				<input class="form-control" type="text" value="<?=$country?>" placeholder="<?=LANG_COUNTRY?>" name="country">
			</div>
		</div>
<!--	<div class="form-group">-->
<!--    <label for="exampleInputOrganization1">--><?//=LANG_ORGAN?><!--</label>-->
<!--    <input type="text" class="form-control" id="exampleInputOrganization1" aria-describedby="organizationHelp" name='organization'>-->
<!--    -->
<!--  </div>-->

  <div class="form-group">
    <label for="exampleInputPassword1"><?=LANG_PASSWORD?></label>
    <input type="password" class="form-control" id="exampleInputPassword1" name='password'>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword2"><?=LANG_CONFPASSWORD?></label>
    <input type="password" class="form-control" id="exampleInputPassword2" name='confirm'>
  </div>
  
  <button type="submit" class="btn btn-primary"><?=LANG_BUTTONREG?></button>
  
</div>
</form>
</div>

<?php
	}