<?php
     function peticion_ajax() {
           return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
     }

     $datos=$_GET['datos'];
     $datos = json_decode($datos,true);

     $id = htmlspecialchars( $datos['id'] );
     $comprobante_aceptado = htmlspecialchars( $datos['comprobante_aceptado'] );
     $estado=2;
     //TODO AGTRGAR LAS DEMAS VARIABLES

     if (peticion_ajax() ) {
     try {
         require('Conexion.php');
         $stmt = $link->prepare("UPDATE `amexenor_registro`.`cie2017` SET `estado_pago` = ?, `comprobante_aceptado` = ?   WHERE `amexenor_registro`.`cie2017`.`id` = ? ");
		       $stmt->bind_param("iii", $estado, $comprobante_aceptado, $id );
          $resultado=$stmt->execute();

          $query="SELECT nombre, apellido, email  FROM cie2017 INNER JOIN `registro` ON cie2017.id_usuario=registro.id WHERE cie2017.id='$id'";
        	$result_email=mysqli_query($link, $query);
        	$row=mysqli_fetch_assoc($result_email);
          $email = $row['email'];

           $mensaje_correo="Apreciable ".$row['nombre']." ".$row['apellido']."<br><br>
           La Academia Mexicana de Energía A.C. agradece tu participación en el Congreso Internacional de Energía 2017, y se complace en informarle que su comprobante de pago ha sido aceptado por el Comité Organizador
           Le recordamos que el CIE 2017 se llevará a cabo del 4 al 8 de septiembre de 2017 en el Centro de Educación Continua Ing. Eugenio Méndez Docurro en la Ciudad de México

           <br><br>
           Aprovechamos la ocasión para enviarle un cordial saludo

           <br><br>
           Atentamente
           <br><br>
           Comité Organizador<br>



           Dra. Margarita M. Gonz&aacute;lez Brambila<br>
           Presidenta de la Academia Mexicana de Energ&iacute;a, A. C.<br>
           http://www.amexen.org<br>
           Jefa del Departamento de Energ&iacute;a<br>
           Divisi&oacute;n de Ciencias B&aacute;sicas e Ingenier&iacute;a<br>
           Universidad Aut&oacute;noma Metropolitana - Azcapotzalco<br>
           Coordinadora General de Congreso Internacional de Energ&iacute;a 2015<br>
           <br>
           Tel. 5318-9056 ext. 101<br>
           Cel. 044-55-26531825<br>";
           //Envío de mail
           $mail = "$mensaje_correo";
           //Titulo
           $titulo = "Comprobante de pago Congreso Internacional de Energía 2017";
           //cabecera
           $headers = "MIME-Version: 1.0\r\n";
           $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
           //dirección del remitente
           $headers .= "From: Academia Mexicana de Energía <email>\r\n";
           //Enviamos el mensaje a tu_dirección_email
           $bool = mail($email,$titulo,$mail,$headers);
           if($bool){
           // 			echo "Mensaje enviado";
           }else{
           // 			echo "Mensaje no enviado";
           }


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
