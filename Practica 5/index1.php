<?php

$destinatario = "xx@xx.com";

$asunto = "prueba";

$cuerpo = "Este es un mensaje de prueba";

if(mail($destinatario, $asunto, $cuerpo)){
    echo "Correo enviado correctamente.";
} else {
    echo "Error al enviar el correo.";
}
?>