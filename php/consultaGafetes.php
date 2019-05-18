<?php
     function peticion_ajax() {
           return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
     }

     $datos=$_GET['datos'];
     $datos = json_decode($datos,true);
     $id = htmlspecialchars( $datos['id'] );

     if (peticion_ajax() ) {
     try {
         require('Conexion.php');
         $query = "SELECT cie2017.id, id_usuario, nombre, apellido, grado, institucion, edo_gafete FROM cie2017 INNER JOIN `registro` ON cie2017.id_usuario=registro.id WHERE cie2017.id= $id ";
         $result= mysqli_query($link, $query);
         $row= mysqli_fetch_assoc($result);
         $resultado=false;
         if($row!=null){
           $resultado=true;
         }

           echo json_encode(array(
                 'respuesta' => $resultado,
                 'id' => $id,
                 'grado'=> $row['grado'],
                 'nombre'=> $row['nombre'],
                 'apellido'=> $row['apellido'],
                 'institucion'=> $row['institucion']

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
