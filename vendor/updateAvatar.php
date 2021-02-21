<?php
	
	session_start();
	require_once 'connect.php';
	$user = $_SESSION['user'];
	$id = $user['id'];

	$path = 'uploads/' . time() . $_FILES['avatar']['name'];

	if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)){
			$_SESSION['message'] = 'Something went wrong during uploaded avatar';
		}
	
	mysqli_query($connect,"UPDATE `users` SET  `avatar` = '$path'  WHERE `id` = '$id'");

	$_SESSION['user'] = [
		"id" => $user['id'],
		"full_name" => $user['full_name'],
		"avatar" => $path,
		"email" => $user['email'],
		"admin" => $user['admin'],
		"phone" => $user['phone'],
		"block" => $user['block']
	];

	header('Location: profile.php');
	

?>