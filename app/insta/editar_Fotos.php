<?session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Visual Admin</title>


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
 $menu = include 'menuall.php';
 echo $arquivo;
 ?>

<?
if (!isset($_SESSION['user'])) {
	$texto = 'Usuario invalido!';
    echo "<script> alert('$texto'); window.location.href='old_index.php'; </script>";
	
}
?>


		<?
		  
			$id2 = $_GET["id"]; 
			require_once("classFotos.php");
			$con=new Fotos(); //Instancia a class
			$rs = $con->selecionaid($id2);
			
			while ($res = mysqli_fetch_array($rs)) {
						$id			= $res["CodFot"];
						$CodImo			= $res["CodImo"];
						$EndFot			= $res["EndFot"];
						$ImgCap			= $res["ImgCap"];
					
					if($ImgCap==1)
						$ImgCapX='Checked';
					else
						$ImgCapX='unChecked';

			echo "<html><title>::: Cadastro Fotos :::</title>

<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Visual Admin</title>


<!-- MASTER STYLESHEET --> 
<link href='css/styles.css' rel='stylesheet' type='text/css' />

</head>

  <body>  
   <div id='content' class='container_12'>

      <div class='grid_12'>

       
			<form method='POST' action='./atualiza_Fotos.php?id=$id'>

	            <div id='logo'>
				<h3><b>Cadastro de Fotos</b></h3>
				</div>
					<table border=0 align=center width=950>
					<tr>
						<td width=100>Im&oacute;vel: </td> <td><input type='text' size='10' name='CodImo' value=$CodImo><a href='lista_Imoveis_select.php'>Consultar</a></td>
					</tr>			
					<tr>
						<td width=100>Foto: </td> <td><input type='text' size='10' name='EndFot' value=$EndFot></td>
					</tr>						
					<tr><td></td><td>
						
					
						<input type='checkbox' name='ImgCap' $ImgCapX value='1'>Imagem Capa
					</td></tr>
					
                </table>
			<!--<tr>
				<td>Situa&ccedil;&atilde;o: </td><td> 
				<select name='SitNot' size='1'>
					<option selected value='$SitNot'>$SitNot</option>
					<option value='A'>Ativa</option>
					<option value='I'>Inativa</option>
				</select>
				</td>	
			</tr>-->
            
			<div class='clearfix'>&nbsp;</div>
					<input type='submit' value='OK' name='B3'>
					<input type='reset' value='Cancelar' name='B4'>

			
			<center><a href='cadastro_Fotos.php'>Nova Fotos</a></center>
			</form>
		</body>
		</html>";
		}//fim while

		?>

<br><br>
</div>
</body>
</html>