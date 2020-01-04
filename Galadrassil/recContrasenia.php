<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if ($_POST['email'] === '') {
	$_SESSION['error'] = true;
	$_SESSION['msj'] = 'Digite un correo por favor';
	header('Location: contraseñaOlvidada.php');
	die;
}

require './database.php';

$cod = random_int(000000, 999999);

$email = $_POST['email'];
//$password = $_POST['password'];
//$password2 = $_POST['password2'];
//$codigo_confirmacion = $_POST[$cod];

$existeEmail = $database->select('usuarios', ['usuario','email', 'password', 'name', 'id'], [
	'email' => $email
]);

/*$existeCod = $database->select('recuperacion_passwordd', ['codigo_confirmacion'], [
	$cod => $codigo_confirmacion
]);*/


if (count($existeEmail) > 0) {
    $database->insert('recuperacion_passwordd', [
        'codigo_confirmacion' => $cod
    ]);   

    $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'lilmakk2@gmail.com';                     // SMTP username
            $mail->Password   = 'galadrassil';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('lilmakk2@gmail.com', 'lilmakk');
            $mail->addAddress($email);     // Add a recipient

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Codigo Confirmacion';
            $mail->Body    = $cod;

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

} else {
	$_SESSION['error'] = true;
	$_SESSION['msj'] = 'Email no registrado';
	header('Location: contraseñaOlvidada.php');
	die;
}