<?php

session_start();

if ($_POST['password'] === '' || $_POST['password2']) {
	$_SESSION['error'] = true;
	$_SESSION['msj'] = 'Llene todos los campos por favor';
	header('Location: confirmarContraseña.php');
	die;
}

if ($password !== $password2) {
	$_SESSION['error'] = true;
	$_SESSION['msj'] = 'Las contraseñas no coinciden';
	header('Location: confirmarContraseña.php');
	die;
}

require './database.php';

$password = $_POST['password'];
$password2 = $_POST['password2'];
$codigo_confirmacion = $_POST[];

$passEncriptada = password_hash(base64_encode($password), PASSWORD_BCRYPT);

$existeCod = $database->select('usuarios', ['usuario','email', 'password', 'name', 'id'], [
	'email' => $email
]);