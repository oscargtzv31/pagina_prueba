<?php

if (isset($_POST['enviar'])) {
  if (!empty($_POST['nombre']) && !empty($_POST['telefono'])
  && !empty($_POST['comentario']) && !empty($_POST['email'])) {
    $nombre = $_POST['nombre'];
    $Telefono = $_POST['telefono'];
    $Mensaje = $_POST['comentario'];
    $email = $_POST['email'];
    $e_mail = oscgtzvar@gmail.com;
    $header = "From: noreply@example.com" . "\r\n"
    $header.= "To: noreply@example.com" . "\r\n";
    $header.= "X-Mailer: PHP/". phpversion();
    $mail = @mail($e_mail,$nombre,$Telefono,$Mensaje,$email,$header);
    if ($mail) {
      echo "<h4> ¡Mail enviado con éxito!</h4>"
    }
  }

}
