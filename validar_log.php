<?php
	require_once('connection/conexaoi.php');

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	$sqlstring = " select * from usuario where email = '$login' and senha=md5('$senha')";
	$info = mysqli_query($conexao, $sqlstring);
	if (!$info) { die('<b>Query Inválida: </b>' . mysqli_error($conexao)); }

    $registro = mysqli_num_rows($info);	
	
	if($registro!=1){
		echo "Usuário não localizado!!!!!";
		echo "<br><a href='index.php'>Voltar</a>";
	}else{
		$dados = mysqli_fetch_array($info);	

		session_start();
		$_SESSION['id'] = $dados['idusuario'];
		$_SESSION['nome'] = $dados['nome'];
		$_SESSION['log'] = 'ativo';		
		
		header("location:admin.php");
	}
?>
