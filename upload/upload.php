<?php
	// if(substr($_FILES['arquivo']['name'], -3)=="png"){
		$dir = './arquivos/'; 
		$tmpName = $_FILES['arquivo']['tmp_name']; 
		$name = $_FILES['arquivo']['name']; 
		// move_uploaded_file
		if( move_uploaded_file( $tmpName, $dir . $name ) ) { 	
			header('Location: index.php'); 		
		} else {		
			echo "Erro ao gravar o arquivo";	
		}
	//}else{
	//		echo "N�o � documento png";
	//}
?>


