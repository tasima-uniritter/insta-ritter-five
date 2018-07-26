

<?
ini_set('default_charset','UTF-8');
$id = $_POST["ID"];
$des = $_POST["des"];
$url = $_POST["URL"];

$EndFot = $_FILES['userfile']['name'];

$dataHora = date("dmYhis");
$EndFot = $dataHora.'.jpg';

	 $arqSize = $_FILES['userfile']['size'];

	  if ($arqSize>3000000) {
		echo "<script> 
				alert('Arquivo muito grande! Limite de 3MB para cadastrar fotos!');
				window.location.href='cadastro_Fotos.php';
			</script>";
	  }
	  
	  
//converte nome do arquivo
//require_once 'caracteres.php';
//echo $EndFot = cesp($EndFot);



	require_once("classFotos.php");
	$con=new Fotos(); //Instancia a class
	$rs = $con->insercao($ID,$des,$EndFot);

	 $menu = include 'envia_arq.php';
     echo $arquivo;
	
echo "<script> 
		alert('Foto inserida com sucesso!');
		window.location.href='old_index.php';
	  </script>";
 
?>




