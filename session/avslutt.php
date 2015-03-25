<?php
	session_start();
	session_destroy();
	header("Location:side1.php");
?>