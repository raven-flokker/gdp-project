<?php
session_start();//Открытие сессии
unset($_SESSION['login']);//Закрытие сессии по логину
session_destroy();//Удаление сессии
	$_SESSION['auth'] = null;
	$_SESSION['login'] = null;
	$_SESSION['auth'] = null;
	$_SESSION['id'] = null;
	$_SESSION['status'] = null;
	$_SESSION['message'] = null;
	$_SESSION['statuse'] = null;
	$_SESSION['lang'] = 'ru';
header("Location: /login.php");//Перенаправление после нажатия кнопки выйти
