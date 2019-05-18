<?php
     function peticion_ajax() {
           return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
     }

     $datos=$_GET['datos'];
     $datos = json_decode($datos,true);

     $id = htmlspecialchars( $datos['id'] );
     $noFactura = htmlspecialchars( $datos['noFactura'] );
     $usuario_factura = htmlspecialchars( $datos['usuario_factura'] );
     //Estado de Ya se generó
     $estado=2;
     //TODO AGTRGAR LAS DEMAS VARIABLES

     if (peticion_ajax() ) {
     try {
         require('Conexion.php');
         $stmt = $link->prepare("UPDATE `amexenor_registro`.`cie2017` SET `factura` = ?, `no_factura` = ?, `usuario_factura` = ?   WHERE `amexenor_registro`.`cie2017`.`id` = ? ");
		       $stmt->bind_param("iisi", $estado, $noFactura, $usuario_factura, $id );
          $resultado=$stmt->execute();

          $query="SELECT nombre, apellido, email  FROM cie2017 INNER JOIN `registro` ON cie2017.id_usuario=registro.id WHERE cie2017.id='$id'";
        	$result_email=mysqli_query($link, $query);
        	$row=mysqli_fetch_assoc($result_email);
          $email = $row['email'];

         $stmt->close();
           echo json_encode(array(
                 'respuesta' => $resultado,
                 'id' => $id,
                 'email'=> $row['email']

               ));

     } catch (Exception $e) {
        $error = $e->getMessage();
        echo "$error";
     }

     $link->close();


   } else {
     exit;
   }
 ?>
