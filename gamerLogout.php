<?php
	setcookie('username', $uname, time()-3600, '/');
	setcookie('password', $password, time()-3600, '/');

	header('location: ../index.php');
?>