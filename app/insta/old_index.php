<?php
/**
 * Created by PhpStorm.
 * User: Anderson
 * Date: 25/07/2018
 * Time: 20:20
 */

mysqli_connect("mysql", "root", "dbinstafive", dbinstafive) or die(mysqli_error());
echo "Connected to MySQL<br />";

Class Fotos{

    //SELECT
    function seleciona(){
        $mySQL = new MySQL;
        $rs = $mySQL->executeQuery("SELECT * FROM Image order by ID;");
        echo $rs;
        return $rs;
        $mySQL->disconnect;
    }
}

?>