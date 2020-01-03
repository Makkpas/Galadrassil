<?php

session_start();

if (
    $_POST['usuario' === '']
	||$_POST['name'] === ''
	|| $_POST['email'] === ''
	|| $_POST['password'] === ''
	|| $_POST['password2'] === ''
) {
	$_SESSION['error'] = true;
	$_SESSION['msj'] = 'Llene todos los campos';
	header('Location: registro.php');
	die;
}

require './database.php';

$usuario = $_POST['usuario'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

$existeEmail = $database->select('usuarios', ['email'], [
	'email' => $email
]);

$existeUser = $database->select('usuarios', ['usuario'], [
	'usuario' => $usuario
]);

if (count($existeUser) > 0) {
	$_SESSION['error'] = true;
	$_SESSION['msj'] = 'Este usuario ya está registrado';
	header('Location: registro.php');
	die;
}

if (count($existeEmail) > 0) {
	$_SESSION['error'] = true;
	$_SESSION['msj'] = 'Este correo ya existe';
	header('Location: registro.php');
	die;
}

if ($password !== $password2) {
	$_SESSION['error'] = true;
	$_SESSION['msj'] = 'Las contraseñas no coinciden';
	header('Location: registro.php');
	die;
}

// Se encripta la contraseña
$passEncriptada = password_hash(base64_encode($password), PASSWORD_BCRYPT);

// Se hace el insert(registro) del usuario
$newUser = $database->insert('usuarios', [
    'usuario' => $usuario,
	'name' => $name,
	'email' => $email,
	'password' => $passEncriptada
]);

// Se verifica que se hizo el insert(registro) correctamente
if ($newUser->rowCount() > 0) {
	$_SESSION['error'] = false;
	$_SESSION['msj'] = 'Registro exitoso, por favor inicie sesión!';

	$user = $database->select('usuarios', ['email', 'name', 'id', 'usuario'], [
		'email' => $email
	]);
	$_SESSION['user'] = $user;
	session_destroy();

	header('Location: inicioSesion.php');
	die;
} else {
	$_SESSION['error'] = true;
	$_SESSION['msj'] = 'Falló el registro!';
	header('Location: registro.php');
	die;
}