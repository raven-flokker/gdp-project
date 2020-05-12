<?php

if (isset($_SESSION['message'])) {
	$text = $_SESSION['message']['text'];
 	$statuse = $_SESSION['message']['statuse'];
	echo "<p class=\"$statuse\">$text</p>";
//	echo $text;
	unset($_SESSION['message']);
}