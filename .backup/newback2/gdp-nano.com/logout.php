<?php
	session_destroy();
	unset($_SESSION['login']);//Закрытие сессии по логину
	session_start();

	// $_SESSION['message'] = ['text' => LANG_NOAUTH];
	$_SESSION['auth'] = null;
	$_SESSION['login'] = null;
	$_SESSION['auth'] = null;
	$_SESSION['id'] = null;
	$_SESSION['status'] = null;
	$_SESSION['statuse'] = null;
	$_SESSION['lang'] = 'ru';
	header('Location: /login');
	exit();