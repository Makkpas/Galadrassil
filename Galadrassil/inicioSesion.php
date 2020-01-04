<?php
session_start();
//session_destroy();

if (isset($_SESSION['user'])) {
	header('Location: jardin.php');
	exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Sesion</title>

    <?php require './inc/styles.php'?>
    <link rel="stylesheet" href="./Assets/css/sidebar.css">
    <link rel="stylesheet" href="./Assets/css/styleInicioSesion.css">

</head>
<body>
    
    <?php require './inc/sidebar.php'?>
    <div class="app">
        <div id='login-form' class="login-form">
            <div class="form-container">

                <h2 class="login__title">Inicia Sesión</h2>

                <form action="login.php" method="POST" class="login__form" autocomplete="on">
                    <input id="email" class="form__input" type="text" id="email" name="email" placeholder="Correo">
                    <input id="password" class="form__input" type="password" id="Password" name="password" placeholder="Contraseña">

                    <a href="contraseñaOlvidada.php" class="login__text login__text--link">¿Olvidó su contraseña?</a>

                    <div class="container-btn">
                        <input class="btn login__btn" type="submit" value="Iniciar Sesión">
                    </div>
                    <div class="container-btn registarse">
                        <a class="btn welcome__btn" href="registro.php">Registrarse</a>
                    </div>
                    <?php
                                if (isset($_SESSION['error']) && $_SESSION['error']) {
                                    echo '<span class="error">' . $_SESSION['msj'] . '</span>';

                                    unset($_SESSION['error']);
                                    unset($_SESSION['msj']);
                                }
                    ?>
                </form>

            </div>
        </div>

    </div>
    <?php include './inc/scripts.php'?>
    <script>
        var index=true;
        var pass=false;
        var sign=false;
        var home=false;
    </script>
    <script src="./Assets/js/app.js"></script>
</body>

</html>