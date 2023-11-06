<html>
<head>
	<title> PHP - UPLOAD de Arquivos </title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
	
	<h1>  Upload - PHP </h1>
	

	<div>
		<form action="upload.php" method="post" enctype="multipart/form-data">
				
			<label for="arquivo">Arquivo:</label> <input type="file" name="arquivo" id="arquivo" />
			
			<br />
			<br />
			
			<input type="submit" value="Enviar" />
			
		</form>
	</div>
<hr>
<?php
	$arquivos = scandir('arquivos');
	for($fig = 2; $fig < count($arquivos);$fig++ ){
		echo "<img src='arquivos/$arquivos[$fig]' width='100px' heigth='100px'>";
		echo "<a href='apagar.php?arquivo=$arquivos[$fig]'><img src='delete.png'></a>";
		echo "&nbsp;&nbsp;";
		
	}
?>




</body>
</html>