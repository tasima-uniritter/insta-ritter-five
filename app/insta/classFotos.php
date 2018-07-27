<?

include_once("classConex_insta.php");

Class Fotos{
	
	//SELECT
    function seleciona(){
		$mySQL = new MySQL;
		$rs = $mySQL->executeQuery("SELECT * FROM Image order by ID;");
		return $rs;
		$mySQL->disconnect;
    }


	function selecionacodimolista($id){
        $mySQL = new MySQL;
		$rs = $mySQL->executeQuery("SELECT EndFot FROM Image where ID=$id;");
		return $rs;
		$mySQL->disconnect;
    }
    function selecionafoto($id){
        $mySQL = new MySQL;
		$rs = $mySQL->executeQuery("SELECT CodImo FROM Image where ID=$id;");
		return $rs;
		$mySQL->disconnect;
    }
	
	function seleciona_ret_endfot($id){
        $mySQL = new MySQL;
		$rs = $mySQL->executeQuery("SELECT EndFot FROM Image where ID=$id;");
		return $rs;
		$mySQL->disconnect;
    }
	
    function selecionaid($id){
        $mySQL = new MySQL;
		$rs = $mySQL->executeQuery("SELECT * FROM Image where ID=$id;");
		return $rs;
		$mySQL->disconnect;
    }
	
	/*function insercao($id,$des,$url){
        $mySQL = new MySQL;
		$sql = "insert into Image (ID,Description,URL) values ('$id','$des','$url')";
		echo $sql;
		$rs = $mySQL->executeQuery($sql);
		return $rs;
		$mySQL->disconnect;
    }*/

    function insercao($des,$url){
        $mySQL = new MySQL;
        $sql = "insert into Image (Description,URL) values ('$des','$url')";
        echo $sql;
        $rs = $mySQL->executeQuery($sql);
        return $rs;
        $mySQL->disconnect;
    }

    function apaga($id){
        $mySQL = new MySQL;
		$rs = $mySQL->executeQuery("delete from Image where ID = $id;");
		return $rs;
		$mySQL->disconnect;
    }

	
	
}
?>