<?php
	session_start();
//Устанавливаем доступы к базе данных:
	$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
	$user = 'root'; //имя пользователя, по умолчанию это root
	$password = ''; //пароль, по умолчанию пустой
	$db_name = 'gdp-nano'; //имя базы данных

//Соединяемся с базой данных используя наши доступы:
	$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

	/*
		Соединение записывается в переменную $link,
		которая используется дальше для работы mysqli_query.
	*/
	mysqli_query($link, "SET NAMES 'utf-8'");
	/*
	 * Ну тут все понятно. Главное не убирать строку session_start();
	 * Так как этот файл инклюдится на главной, он распространяется на все страницы
	 * и проще прописать тут, чем повторяться или писать в индексе
	 */