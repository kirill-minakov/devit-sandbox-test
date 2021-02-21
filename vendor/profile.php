<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Авторизация и регистрация</title>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>


<!-- Профиль -->

<form >
	<img src="../<?=$_SESSION['user']['avatar']?>" width="200px">
	<h2 style="margin: 10px 0;"><?=$_SESSION['user']['full_name']?></h2>
	<a href="#"><?=$_SESSION['user']['email']?></a>
	<a href="vendor/logout.php" class="logout">Выход</a>
</form>


</body>
</html>