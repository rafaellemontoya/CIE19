<?php
     function peticion_ajax() {
           return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
     }

     $datos=$_GET['datos'];
     $datos = json_decode($datos,true);

     $id = htmlspecialchars( $datos['id'] );
     $id_sesion = htmlspecialchars( $datos['idSesion'] );
     $estado = htmlspecialchars( $datos['estado'] );
     //3 = Asistió

     if (peticion_ajax() ) {
     try {
         require('Conexion.php');
         if($estado==1){
           $stmt = $link->prepare("UPDATE `amexenor_registro`.`cie2017` SET `edo_gafete` = ?, `creado_gafete` = ?   WHERE `amexenor_registro`.`cie2017`.`id` = ? ");
       }elseif ($estado==2) {
         $stmt = $link->prepare("UPDATE `amexenor_registro`.`cie2017` SET `edo_gafete` = ?, `usuario_gafete` = ?   WHERE `amexenor_registro`.`cie2017`.`id` = ? ");
       }
		      $stmt->bind_param("iii", $estado, $id_sesion, $id );
          $resultado=$stmt->execute();
          // $resultado=true;


         $stmt->close();
           echo json_encode(array(
                 'respuesta' => $resultado,
                 'estado' => $estado,
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
