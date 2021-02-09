<?php
    // Import PHPMailer classes into the global namespace
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    
    // Ruta de los archivos que contienen funcines del PHPMailer:
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    // Guardamos en variables los datos que nos pasa el usuario:
    $nombreCliente = $_POST["datoNombreContact"];
    $emailCliente = $_POST["datoEmailContact"];
    $mensajeCliente = $_POST["datoMensajeContact"];
    
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                  // Enable verbose debug output
        $mail->isSMTP();                                        // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                   // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                               // Enable SMTP authentication
        $mail->Username   = 'bookhousebibliotecario@gmail.com'; // SMTP username
        $mail->Password   = 'Biblio123';                        // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
        //Recipients
        $mail->setFrom($emailCliente, $nombreCliente);             // Quien envia el correo
        $mail->AddReplyTo($emailCliente, $nombreCliente);
        $mail->addAddress('bookhousebibliotecario@gmail.com');      // Quien recibe el correo
//         $mail->addAddress($emailCliente);      // Quien recibe el correo
        
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $nombreCliente . '  -- Ha enviado un correr a la Biblioteca BookHouse'; // Asunto del Correo
        $mail->Body    = "<p>" . $mensajeCliente . "</p>";    // Mesaje del Correo
        
        $mail->send();
        echo "<script type='text/javascript'> alert('Correo Enviado correctamente.'); window.location.href='Contact.php';</script>";
    
    } catch (Exception $e) {
        header("refresh:4;url=Contact.php");
        echo "ERROR!!!";
        echo "No se ha podido enviar el mensaje. Mailer Error: {$mail->ErrorInfo}";
    }
?>
