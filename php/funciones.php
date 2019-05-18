<?php
function validar_estado_pago($id){
	include 'Conexion.php';
	$query="SELECT estado_pago FROM cie2017 WHERE id_usuario=$id";
	$result = mysqli_query($link, $query);
	$row= mysqli_fetch_assoc($result);
	if($row!=null){
		return $row['estado_pago'];
	}else{
		return "-1";
	}
	$link->close();
}