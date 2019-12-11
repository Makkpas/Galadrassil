<?php

session_start();

if ($_POST['email'] === '' || $_POST['password'] === '') {
	$_SESSION['error'] = true;
	$_SESSION['msj'] = 'Llene todos los campos';
	header('Location: inicioSesion.php');
	die;
}

//TODO: Incluir database
require './database.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Hacer select para tener el user(where => email)
$existeEmail = $database->select('usuarios', ['usuario','email', 'password', 'name', 'id'], [
	'email' => $email
]);

// Verificar que exista el email
if (count($existeEmail) > 0) {
	$user = $existeEmail[0];

	// Verificar que los pass sean los mismos
	$coincidenContrasenias = password_verify(base64_encode($password), $user['password']);

	if ($coincidenContrasenias) {
		$_SESSION['error'] = false;
		$_SESSION['msj'] = 'Inicio de sesión exitoso!';

		// Almacenamos en sesion el usuario logueado
        $_SESSION['user'] = $user;
        
        //Eliminamos la contraseña del array
		unset($user['password']);

		header('Location: jardin.php');
		die;
	} else {
		$_SESSION['error'] = true;
		$_SESSION['msj'] = 'Email o (contraseña) incorrectos';
		header('Location: inicioSesion.php');
		die;
	}
} else {
	$_SESSION['error'] = true;
	$_SESSION['msj'] = '(Email) o contraseña incorrectos';
	header('Location: inicioSesion.php');
	die;
}