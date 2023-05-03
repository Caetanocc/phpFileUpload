<?php
	session_start();

	if ($_SESSION['log'] != "ativo")
	   {
		session_destroy();
		header("location:index.php");
	}
?>