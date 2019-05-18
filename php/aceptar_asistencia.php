<?php
     function peticion_ajax() {
           return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
     }

     $datos=$_GET['datos'];
     $datos = json_decode($datos,true);

     $id = htmlspecialchars( $datos['id'] );
     $id_sesion = htmlspecialchars( $datos['idSesion'] );
     //3 = Asistió
     $estado=3;

     if (peticion_ajax() ) {
     try {
         require('Conexion.php');
         $stmt = $link->prepare("UPDATE `amexenor_registro`.`cie2017` SET `estado_pago` = ?, `usuario_asistencia` = ?   WHERE `amexenor_registro`.`cie2017`.`id` = ? ");
		       $stmt->bind_param("iii", $estado, $id_sesion, $id );
          $resultado=$stmt->execute();
          // $resultado=true;


         $stmt->close();
           echo json_encode(array(
                 'respuesta' => $resultado,
                 'id' => $id

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
