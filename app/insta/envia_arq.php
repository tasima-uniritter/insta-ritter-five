
<?
ini_set('default_charset','UTF-8');
/* Insira aqui a pasta que deseja salvar o arquivo*/
$uploaddir = 'img_imo/';


//$EndFot = $_FILES['userfile']['name'];

$dataHora = date("dmYhis");
$EndFot = $dataHora.'.jpg';

//converte nome do arquivo
//require_once 'caracteres.php';
//echo $EndFot = cesp($EndFot);



  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . $EndFot)) {
	print 'O arquivo é valido e foi carregado com sucesso!';
  }
  else {
    print 'Erro de upload!';
  }

  
   $allowedExtensions = array("jpg","jpeg","gif","png");
  foreach ($_FILES as $file) {
    if ($file['tmp_name'] > '') {
      if (!in_array(end(explode(".",
            strtolower($file['name']))),
            $allowedExtensions)) {
       die($file['name'].' tipo de arquivo invalido!<br/>'.
        '<a href="javascript:history.go(-1);">'.
        '&lt;&lt Go Back</a>');
      }
    }
  } 
 
?>

