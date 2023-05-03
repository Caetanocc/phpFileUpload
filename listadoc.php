<html>
<head>
	<title> PHP - Depto Jurídico - Processos </title>
	<meta charset="UTF-8"> 
	
	<style>
	table, th, td {
		border: 1px solid black;
	}
	</style>
	
</head>
<body>
<?php
	include('connection/validar_sessao.php');
?>

	<h1> Depto Jurídico - Processos  - <?php echo $_SESSION['nome'] ?></h1>
	<h2> Sair <a href="index.php"><img alt="Sair" src='img/sair.png' style="width:64px;height:64px;"></a></h2>

	<hr>
	<h2> Carregar arquivos </h2>
	<div>
		<form action="upload.php" method="post" enctype="multipart/form-data">
				
			<label for="arquivo">Arquivo:</label> 
			<input type="file" name="arquivo" id="arquivo" />
			<br />
			<br />
	
			<label for="descricao">Descrição do arquivo:</label> 
			<input type="text" name="descricao" id="descricao" size="60"/>
			
			<br />
			<br />
			
			<input type="submit" value="Enviar" />
			
		</form>
	</div>
<hr>
<?php
	function convertedata($data){
		$data_vetor = explode('-', $data);
		$novadata = implode('/', array_reverse ($data_vetor));
		return $novadata;
	}
	
	include_once('connection/conexaoo.php');
	//criando o objeto mysql e conectando ao banco de dados
	$mysql = new BancodeDados();
	$mysql->conecta();
	
	$conn = $mysql->con;
	
	$sqlstring = 'select * from imagens order by arquivo';
	$query = @mysqli_query($mysql->con, $sqlstring);
	$docs = array();
	while ($dados = @mysqli_fetch_array($query)){
		array_push($docs, $dados);
	}

	$mysql->fechar();	
?>


	<h2> Lista de Documentos: </h2>

<table  >
	<tr>
		<td>Arquivo</td>
		<td>Descrição</td>
		<td>Data Inclusão</td>
		<td>Remover</td>
		<td>Visualizar</td>
	</tr>

	<?php
		// $docs = listaDocs($mysql);
		foreach($docs as $doc) :
	?>
	<tr>
		<td><?= $doc['arquivo'] ?></td>
		<td><?= substr($doc['descricaoarq'], 0, 40) ?></td>
		<td><?= convertedata($doc['datainc']) ?></td>
		<td><a href="apagar.php?id=<?= $doc['id'] ?>"><img src='img/delete.png' style="width:32px;height:32px;"></a></td>
		<td><a href="arquivos/<?= $doc['arquivo'] ?>" target="_blank"><img src='img/lupa.png' style="width:32px;height:32px;"></a></td>
	</tr>
	<?php
		endforeach
	?>	
</table>		




</body>
</html>