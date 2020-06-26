<?php
	session_start();
	if ($_SESSION['user']==""){
		header("Location: ../security/notAuthenticated.php");
	}
?>