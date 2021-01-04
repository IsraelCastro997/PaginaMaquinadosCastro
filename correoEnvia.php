<?php
        //En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
    $destino = "israelcastro997@gmail.com";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nCorreo: " . $email . "\nNúmero: " . $numero . "\nAsunto: " . $mensaje;
    $mail = mail($email, "Contacto", $contenido);
    if ($mail) {
       echo " <h4>Mail enviado exitosamente</h4>";
    }
    header("Location: correo.php");
?>


