<?

$CodFot = $_GET["id"];
$CodImo = $_POST["CodImo"];
$EndFot = $_POST["EndFot"];
$ImgCap = $_POST["ImgCap"];

if($CodImo=="") {
	echo "<script> 
		alert('O campo Im�vel � obrigat�rio!');
		window.location.href='cadastro_Fotos.php';
	  </script>";
}

	require_once("classFotos.php");
	$con=new Fotos(); //Instancia a class
	$rs = $con->atualizar($CodFot,$CodImo,$EndFot,$ImgCap);

echo "<script> 
		alert('Foto atualizada com sucesso!');
		window.location.href='lista_Fotos.php';
	  </script>";
 
?>




