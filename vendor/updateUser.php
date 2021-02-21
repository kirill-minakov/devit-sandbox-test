<?php
session_start();
	require_once 'connect.php';

	$id = $_POST['id'];
	$admin = $_POST['admin'];
	$block= $_POST['block'];

	if($admin == "1"){
		$block = 0;
	}

	mysqli_query($connect,"UPDATE `users` SET  `admin` = '$admin',`block` = '$block' WHERE `id` = '$id'");

	header('Location: profile.php');

?>