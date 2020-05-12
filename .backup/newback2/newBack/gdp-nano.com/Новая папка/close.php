<?php
session_start();//Открытие сессии
unset($_SESSION['login']);//Закрытие сессии по логину
session_destroy();//Удаление сессии
header("Location: /login.php");//Перенаправление после нажатия кнопки выйти
