<?php
	$arquivo = $_GET['arquivo'];
	unlink ('arquivos/'.$arquivo);
	header('Location: index.php'); 
?>
