<?php
error_reporting(E_ERROR | E_PARSE);
include ("BD.php");
$s="localhost";
$u="amexenor_cliente";
$p="AmexEn100114";
$db="amexenor_registro";
$link = new mysqli($s, $u, $p,$db );

if($link->connect_errno){
	echo "Error en la conexión";
}else{
}



?>
