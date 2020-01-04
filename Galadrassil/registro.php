<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>

    <?php require './inc/styles.php'?>
    <link rel="stylesheet" href="./Assets/css/sidebar.css">
    <link rel="stylesheet" href="./Assets/css/registro.css">

</head>
<body>
   
    <?php require './inc/sidebar.php'?>
    <section id="app" class="app">
            <div class="form">
                    <div id="form__register" class="form__register">
                            <H2 class="register__tittle">Registro</H2>
                            <form action="signin.php" method="POST" class="register__form" autocomplete="on">
                                <input class="input__form form__user" type="text" id="user" name="usuario" placeholder="Usuario">
                                <input class="input__form form__name" type="text" id="name" name="name" placeholder="Nombre completo">
                                <input class="input__form form__email" type="email" id="email" name="email" placeholder="Email">
                                <input class="input__form form__password" type="password" id="password" name="password" placeholder="Contraseña">
                                <input class="input__form form__password2" type="password" id="password2" name="password2" placeholder="Confirme Contraseña">
                            
                                <div class="form__buttom">
                                    <input class="register__buttom" type="submit" value="Registrar">
                                </div>
                                <div class="form__login">
                                    <a class="login" href="inicioSesion.php">Iniciar Sesión</a>
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
    </section>
    <?php include './inc/scripts.php'?>
    <script>
        var index=false;
        var pass=false;
        var sign=true;
        var home=false;
        var profile=false;
        var score=false;
    </script>
    <script src="./Assets/js/app.js"></script>
</body>
</html>