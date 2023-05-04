<?php

	include_once('connection/conexaoo.php');
	include('connection/validar_sessao.php');

 	function randString($size){
        //String com valor poss�veis do resultado, os caracteres pode ser adicionado ou retirados conforme sua necessidade
        $basic = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $return= "";
        for($count= 0; $size > $count; $count++){
            //Gera um caracter aleatorio
            $return.= $basic[rand(0, strlen($basic) - 1)];
        }
         return $return;
    }
	$nome_final = randString(20).".png";	
				
	$descricao = $_POST['descricao'];			
	$idusuario = $_SESSION['id'];
				
	if(substr($_FILES['arquivo']['name'], -3)=="png"){
		$dir = './arquivos/'.$_SESSION['nome'].'/'; 
		$tmpName = $_FILES['arquivo']['tmp_name']; 
		$name = $_FILES['arquivo']['name']; 
		// move_uploaded_file
		if( move_uploaded_file( $tmpName, $dir . $nome_final) ) { 	
				$mysql = new BancodeDados();
				$mysql->conecta();
				$sqlstring = "insert into imagens (id, arquivo, descricaoarq, datainc, idusuario) 
				values (null, '$nome_final', '$descricao', now(), '$idusuario' )";
				mysqli_query($mysql->con, $sqlstring);
				header('Location: listadoc.php'); 		
		} else {		
			echo "Erro ao gravar o arquivo";	
		}
	}else{
			echo "N�o � documento png!";
	}
?>


