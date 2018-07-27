<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insta Ritter</title>


<!-- MASTER STYLESHEET --> 
<link href="css/styles.css" rel="stylesheet" type="text/css" />

</head>

         
<!-- START THE MENU --> 
<script type="text/javascript">

// initialise plugins
jQuery(function(){
	jQuery('ul.sf-menu').superfish();
});

</script>





<?

$htm = "<html><title>::: Fotos inclu&iacute;das :::</title><body text=#000000>
   <div id='content' class='container_12'>

      <div class='grid_12'>
	  <font size=3>

</body></html>";

echo $htm;


	require_once("classFotos.php");

	$con=new Fotos(); //Instancia a class

	$rs = $con->seleciona($Texto);  //Seleciona
	
	
	while ($res = mysqli_fetch_array($rs)) {
				$id				= $res["ID"];
				$des			= $res["Description"];
				$url			= $res["URL"];
				
			

				
	echo "<table width=40% border='0' cellpadding='1' cellspacing='0' align='center' bordercolor='#ffffff'>
			<tr>	
				<td width=90%><img src='img_imo/$url' width=90%></td>
                <td width=10% align='center'><a href=apagar_Fotos.php?id=$id><img src='img_site/lixeira.png'></a></td>		

			</tr>
		</table>"; // imprimo o que desejo
	
	} //while
	

		echo "<br><table align=center>
			<tr><td><a href='index.php'>Voltar</a></td></tr>
		</table>";
?>



