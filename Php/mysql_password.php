<?php
/* This file is for the settings menu in usbwebserver, it give's the posibilitie for change the root password in mysql */

$exp = explode("|||",$_SERVER['argv'][1]);
$old = $exp[0];
$new = $exp[1];
$port = 3307;
mysql_connect("localhost","root",$old);
mysql_query("SET PASSWORD FOR root@localhost=PASSWORD('".$new."');") or die(mysql_error());
?>