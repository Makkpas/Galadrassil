<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recuperación de Contraseña</title>

    <?php require './inc/styles.php'?>
    <link rel="stylesheet" href="./css/styleContraseña.css">

</head>

<body>
    <div class="passwordPage">
        <div class="forgot-form">
            <div class="forgot-container">

                <h2 class="page__title">¿Olvidó su contraseña?</h2>

                <form class="email__form " autocomplete="on">
                    <input class="email__input" type="email" id="email" name="email" placeholder="Correo">

                    <div class="container-btn">
                        <button class="btn send__btn" type="submit">Enviar</button>
                    </div>
                    <div class="container-btn volver">
                        <a class="btn back__btn" href="inicioSesion.php">Volver</a>
                    </div>
                </form>

            </div>
        </div>

    </div>
</body>

</html>