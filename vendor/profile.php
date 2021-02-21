<?php
	require('../header.php');
	require_once('connect.php');
?>
	<?php
		$user = $_SESSION['user'];
	?>

	 <?php $user['block'] == '1' ? require('block_user.php') : require('profileForm.php') ?>	

	 <?php ($user['admin']) ? require('users.php'): null; ?>


	</div>
		
