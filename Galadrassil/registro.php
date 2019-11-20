<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>

    <link rel="stylesheet" href="./css/registro.css">
</head>
<body>
    <div class="background">
        <div  class="background__menu">
                <a id="icon-menu1" class="button--menu" href="#">
                    <svg class="iconify iconify--menu-normal" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="50" height="50" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path d="M20 5V2H0v3h20zm0 6V8H0v3h20zm0 6v-3H0v3h20z" fill="white"/></svg>
                </a>
        </div>
        <div class="sidebar">
            <div class="icon">
                <a id="icon-menu2" class="button--menu" href="#">
                    <svg class="iconify iconify--menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="50" height="50" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path d="M20 5V2H0v3h20zm0 6V8H0v3h20zm0 6v-3H0v3h20z" fill="white"/></svg>
                </a>
            </div>
            <ul class="list">
                <li class="sidebar__list"><a class="sidebar__login" href="inicioSesion.html">Inicio Sesión</a></li>
            </ul>
        </div>
            <div class="form">
                    <div class="form__register">
                            <H2 class="register__tittle">Registro</H2>
                            <form class="register__form" autocomplete="on" action="">
                                <input class="input__form form__user" type="user" id="user" name="user" placeholder="Usuario">
                                <input class="input__form form__name" type="name" id="name" name="name" placeholder="Nombre completo">
                                <input class="input__form form__email" type="email" id="email" name="email" placeholder="Email">
                                <input class="input__form form__password" type="password" id="password" name="password" placeholder="Contraseña">
                                <input class="input__form form__password2" type="password2" id="password2" name="password2" placeholder="Confirme Contraseña">
                            </form>
                
                            <div class="form__buttom">
                                    <button class="register__buttom" type="submit">Registarse</button>
                            </div>
                            <div class="form__login">
                                <a class="login" href="inicioSesion.html">Iniciar Sesión</a>
                            </div>
                    </div>
            </div>
    </div>
    
    
    <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>
    <script src="./assets/js/app.js"></script>
</body>
</html>