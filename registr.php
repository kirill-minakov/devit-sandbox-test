<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Авторизация и регистрация</title>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>


<!-- Форма регистрации -->

<form  action="vendor/signup.php" method="post" enctype="multipart/form-data">
	<label>ФИО</label>
	<input type="text"  name="full_name" placeholder="Введите свое полное имя">
	<label>Логин</label>
	<input type="text" name="login" placeholder="Введите свой логин">
	<label>Почта</label>
	<input type="email" name="email" placeholder="Введите адресс своей почты">
	<label>Изображение профиля</label>
	<input type="file" name="avatar" >
	<label>Номер телефона</label>
	<input type="tel"  name="tel" placeholder="Введите свой номер телефона">
	<label>Пароль</label>
	<input type="password"  name="password" placeholder="Введите пароль">
	<label>Подтвердите пароль</label>
	<input type="password" name="password_confirm" placeholder="Подтвердите пароль">
	<button type="submit">Войти</button>

	<p>
		У вас уже есть аккаунта? - <a href="/">Авторезируйтесь</a>
	</p>
	<?php
			if($_SESSION['message']){
			echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
		}
		unset($_SESSION['message']);
		?>
	
	
	
</form>


</body>
</html>