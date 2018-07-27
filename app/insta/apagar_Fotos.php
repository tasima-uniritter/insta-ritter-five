<?
	
	require_once("classFotos.php");

	$con=new Fotos(); //Instancia a class
	
	$id2 = $_GET["id"];
	$rs = $con->selecionaid($id2);  //Seleciona
	
	while ($res = mysqli_fetch_array($rs)) { //recebe todos os dados do select
		$id = $res["ID"];
		
	if($id==$id2) {

	    require_once("classFotos.php");
		$con2=new Fotos(); //Instancia a class	
		$rs2 = $con2->selecionaid($id2); //recebe nome do arquivo
		while ($res2 = mysqli_fetch_array($rs2)) { //recebe todos os dados do select
			$id3 = $res2["URL"];	
		}
		
		$arquivo = "img_imo/" . $id3;
  
		  // vamos excluir
		  if(unlink($arquivo)){
			echo "Arquivo exclu�do com sucesso.";
		  }
		  else{
			echo "N�o foi poss�vel excluir o arquivo.";
		  }
		
		$rs = $con->apaga($id2);			
	
	echo "<script> 
		alert('Foto excluída!');
		window.location.href='lista_Fotos.php';
		</script>";
	}

	}
				
?>

