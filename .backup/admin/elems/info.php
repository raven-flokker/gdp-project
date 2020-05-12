<?php

if (isset($_SESSION['message'])) {
	$text = $_SESSION['message']['text'];
	$status = $_SESSION['message']['statuse'];
	echo "<div class=\"alert $status\" role=\"alert\">$text</div>";
	unset($_SESSION['message']);
}