<?php
	include "inc/db.php";

	include "inc/function.php";

	//объявляем константу содержащую путь до файлов языков
	define('LANGUAGE_DIR', $_SERVER['DOCUMENT_ROOT']."/language/", false);
//	$_SESSION['lang'] = 'en';
	// $_SESSION['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); // Эта строчка меняет автоматически язык. если нужно раскоментируй
if (!isset($_SESSION['lang'])){
//			$language = $_SESSION['lang'] = 'ru';
		$_SESSION['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
			
		}else{
			if (isset($_GET['ru'])){
				$_SESSION['lang'] = 'ru';
				header('Location: /');
				die();
			}elseif (isset($_GET['en'])){
				$_SESSION['lang'] = 'en';
				header('Location: /');
				die();
			}
		}
//	if (!isset($_SESSION['lang'])){
//		$language = $_SESSION['lang'] = 'ru';
//	}else{
//		$_SESSION['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
//	}
	//получаем переменную языка
	$language = $_SESSION['lang'];
	//не обязательно получать переменную гет-ом
	//можно брать ее откуда угодно, например - из базы данных, или из сессии

	//загружаем файл перевода
	include_once(LANGUAGE_DIR . $language . '.php');

	$title = LANG_TITLE;
	ob_start();
	include "template/layout.php";
	