<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = htmlspecialchars($_POST['nombre']);
    $mail = htmlspecialchars($_POST['mail']);
    $nombreAmigo = htmlspecialchars($_POST['nombre_amigo']);
    $mailAmigo = htmlspecialchars($_POST['mail_amigo']);

    
    $to = $mailAmigo;

    
    $subject = 'Recomendación de Sitio Web';

   
    $body = "
    <html>
    <head>
      <title>Recomendación de Sitio Web</title>
    </head>
    <body>
      <h2>Hola {$nombreAmigo},</h2>
      <p>Tu amigo {$nombre} te ha recomendado visitar este sitio web.</p>
      <p>Puedes visitarlo en el siguiente enlace: <a href='http://www.ejemplo.com'>www.ejemplo.com</a></p>
      <p><strong>¡Saludos!</strong></p>
    </body>
    </html>
    ";


    if (mail($to, $subject, $body)) {
        echo 'Recomendación enviada con éxito.';
    } else {
        echo 'Error al enviar la recomendación.';
    }
} else {
    echo 'Método de solicitud no válido.';
}
?>