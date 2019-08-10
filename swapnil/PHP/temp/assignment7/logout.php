<?php
	unset($_SESSION["logged_in"]);
	session_destroy();
	header("Location: ../assignment7.php");			
?>