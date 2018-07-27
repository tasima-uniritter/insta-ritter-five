<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insta Ritter Five</title>


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
 require_once("./insta/classFotos.php");
$con=new Fotos(); //Instancia a class
ini_set('default_charset','UTF-8');
?>

  <body bgcolor='ffff99'>  
   <div id="content" class="container_12">

      <div class="grid_12">
	  <center>
	  <table width=200 border=1><tr><td>
			<form enctype="multipart/form-data" method="POST" action="insta/insere_Fotos.php?id=<?echo $id;?>">

	            <div id="logo">
				
				<center>
				<h3><b><font size=6 color=green>Insta Ritter</font></b></h3>
				</div>
				<center>	
				  <table border=0 align=center width=300>
					<tr><td></td><td>
                            Descrição: <input type="text" name="des" value="">
					</td></tr>
					<tr>
						<td> </td><td><input name='userfile' type='file'></td>
					</tr>
				

                </table>

            <br>
			<div class="clearfix">&nbsp;</div>
			<center>
					  <input type="submit" value="Enviar Foto" name="B3">
					  <input type="reset" value="Cancelar"name="B4">

			
			<br><br><br><center><a href="insta/lista_Fotos.php">Ver Fotos</a></center>
			</form>
      </td></tr></table>
      <br><br>  
  


     
    
        </div>
    <!-- END ADMIN WRAPPER -->
    

</body>
</html>

