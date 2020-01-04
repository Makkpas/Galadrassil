<?php
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recuperación de Contraseña</title>

    <?php require './inc/styles.php'?>
    <link rel="stylesheet" href="./Assets/css/sidebar.css">
    <link rel="stylesheet" href="./Assets/css/styleContraseña.css">
</head>

<body>
<script>
    var index=false;
    var pass=true;
    var sign=false;
    var home=false;
    </script>
<?php require './inc/sidebar.php'?>
    <div class="passwordPage">
        <div class="forgot-form">
            <div class="forgot-container">

                <h2 class="page__title">¿Olvidó su contraseña?</h2>

                <form action="recContrasenia.php" method="POST" class="email__form " autocomplete="on">
                    <input class="email__input" type="email" id="email" name="email" placeholder="Correo">

                    <div class="container-btn">
                        <button class="btn send__btn" type="submit">Enviar</button>
                    </div>
                    <div class="container-btn volver">
                        <a class="btn back__btn" href="inicioSesion.php">Volver</a>
                    </div>

                </form>
                <?php
                    if (isset($_SESSION['error']) && $_SESSION['error']) {
                        echo '<span class="error">' . $_SESSION['msj'] . '</span>';

                        unset($_SESSION['error']);
                        unset($_SESSION['msj']);
                    }
                ?>
            </div>
        </div>

    </div>
    <?php include './inc/scripts.php'?>
    <script src="./Assets/js/app.js"></script>
</body>

</html>