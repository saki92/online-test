<?php
	// logout code
	session_start();
	$_SESSION['loggedin'] = False;
	header("Location: home.php");
?>
