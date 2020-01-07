<?php

session_start();

// obtenemos el id que guardamos para saber a que usuario debemos consultar
if(isset($_SESSION['id'])){
    $id =$_SESSION['id'];
}

$password = $_POST['password'];
$password2 = $_POST['password2'];
$codigo_confirmacion = $_POST['code'];

if ($_POST['password'] === '' || $_POST['password2']=== '') {
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

$passEncriptada = password_hash(base64_encode($password), PASSWORD_BCRYPT);

$existeCod = $database->select('recuperacion_password', ['codigo_confirmacion'], ['id_usuario' => $id]);//desde aquí pedimos el codigo, con eso basta 

//creo que es innecesario ver si existe el usuasrio ya que se revisa en la pagina de solicitud de recuperación
// $existeUser2 = $database->select('usuarios', ['id'], ['id' => $id]); 


if($codigo_confirmacion !== $existeCod[0]['codigo_confirmacion']){ // hacemos el correcto uso de el select, ya que es un arreglo usamos la posición 0 y luego la variable que solicitamos

	$_SESSION['error'] = true;
	$_SESSION['msj'] = 'Codigo de confirmación invalido';
	header('Location: confirmarContraseña.php');
	die;

} else{

	$database -> update('usuarios',['password' => $passEncriptada],['id' => $id]);
	$database -> delete('recuperacion_password',['id_usuario' => $id]); // y le borramos la recuperación de contraseña por que ya fue utilizada
	$_SESSION['error'] = false;
	$_SESSION['msj'] = 'Contraseña actualizada';
	session_destroy();// ya no ocupamos la sesión por que solo guardaba el id del usuario al que le cambiamos la contraseña.
	header('Location: inicioSesion.php');
	die;

}