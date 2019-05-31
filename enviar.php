<?php

    $name    = $_POST['name'];
    $phone   = $_POST['phone'];
    $business   = $_POST['business'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $page = $_POST['page'];

    if (empty($message) && $page != "Interiores") {
        $message = "No incluyó un mensaje :(";
    } else {
        $message = '"'.$message.'"';
    }

    $to      = "agencia@blackpeppa.pe";
    $subject = "Nuevo Contacto - ".$name;

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Bcc: pieroblackp@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $content = '<html><body>';
    $content .= '<h2>Información del mensaje</h2>';
    $content .= '<p><strong>Nombre: </strong>' . $name . '</p> ';
    $content .= '<p><strong>Teléfono: </strong>' . $phone . '</p> ';
    $content .= '<p><strong>Empresa: </strong>' . $business . '</p> ';
    $content .= '<p><strong>Correo Electrónico: </strong>' . $email . '</p> ';
    $content .= '<p><strong>Mensaje: </strong>' . $message . '</p> ';
    $content .= '<p><strong>Página de Origen: </strong>' . $page . '</p> ';
    $content .= '</html></body>';

    if ( mail($to,$subject,$content,$headers) ) {
        echo "Gracias! Estaremos en contacto con usted pronto.";
    } else {
        echo '<script language="javascript">alert("Ha ocurrido un error. Por favor, recargue la página.")</script>';
    }
?>

