<html>
<head>
	<title> PHP -  Depto Jurídico - Processos  </title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
	<h1> PHP -  Depto Jurídico - Processos </h1>
	
<?php
	include('connection/validar_sessao.php');

	echo "Olá, <b>".$_SESSION['nome']."</b>, bem vindo ao Depto Jurídico.";
	echo ""
?>
<br><br>
<b>Página autorizada</b>
<br><br>

<a href='listadoc.php'>Clique aqui para incluir/consultar documentos.</a>

</body>
</html>
