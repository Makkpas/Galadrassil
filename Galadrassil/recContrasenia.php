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
$id_usuario = $_POST['id_usuario'];

$existeEmail = $database->select('usuarios', ['usuario','email', 'password', 'name', 'id'], [
    'email' => $email
]);

/*$existeCod = $database->select('recuperacion_passwordd', ['codigo_confirmacion'], [
	$cod => $codigo_confirmacion
]);*/


if (count($existeEmail) > 0) {
    $database->insert('recuperacion_password', [
        'codigo_confirmacion' => $cod,
        'id_usuario' => $existeEmail[0]['id']
    ]);   

    $mail = new PHPMailer(true);

        try {
            //Configuración del servidor
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                    
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'lilmakk2@gmail.com';                     
            $mail->Password   = 'galadrassil';                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        
            $mail->Port       = 587;                                    

            //Usuario que envia el correo
            $mail->setFrom('lilmakk2@gmail.com', 'lilmakk');
            $mail->addAddress($email);     

            // contenido
            $mail->isHTML(true);                                  
            $mail->Subject = 'Codigo Confirmacion';
            $mail->Body    = $cod;

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    header('Location: confirmarContraseña.php');
	die;
} else {
	$_SESSION['error'] = true;
	$_SESSION['msj'] = 'Email no registrado';
	header('Location: contraseñaOlvidda.php');
	die;
}