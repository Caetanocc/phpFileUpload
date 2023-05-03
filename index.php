<!DOCTYPE html>
<html>
<head>
	<title> PHP -  Depto Jurídico - Processos  Login </title>
    <meta charset="UTF-8"> 
	
	<?php 
		session_start();
	    session_destroy(); 
	?>
</head>
<body>
	<h1> PHP -  Depto Jurídico - Processos - Login </h1>
	<form name="login" method="POST" action="validar_log.php">
		<br>
		Login:<br>
		<input type="text" name="login" maxlength="50" style="width:250px"><br>
		Senha:<br>
		<input type="password" name="senha" maxlength="12" style="width:250px"><br><br>
		
		<input type="submit" value="Ok">
	</form>
	

</body>
</html> 