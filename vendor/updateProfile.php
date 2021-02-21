<?php
	
	session_start();
	require_once 'connect.php';

	$user = $_SESSION['user'];
	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$tel= $_POST['tel'];

	$id = $user['id'];

	mysqli_query($connect,"UPDATE `users` SET  `full_name` = '$full_name',`email` = '$email', `tel` = '$tel' WHERE `id` = '$id'");

	$_SESSION['user'] = [
		"id" => $user['id'],
		"full_name" => $full_name,
		"avatar" => $user['avatar'],
		"email" => $email,
		"admin" => $user['admin'],
		"phone" => $tel,
		"block" => $user['block']
	];

	header('Location: profile.php');
?>