<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jardín</title>

    
    <link rel="stylesheet" href="css/jardin.css">
</head>
<body>
   
    <?php include './inc/scripts.php'; ?>
   
    <header class="header">
        <div class="header__tree">
            <a id="tree" href="#">
                <svg class="tree" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="50" height="50" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><path d="M49.669 15.595C49.212 8.019 42.468 2 34.193 2c-4.92 0-9.297 2.132-12.141 5.448a16.05 16.05 0 0 0-4.229-.571c-8.275 0-14.983 6.229-14.983 13.91c0 2.759.876 5.324 2.368 7.487C3.204 30.736 2 33.792 2 37.116c0 8.115 7.085 14.692 15.824 14.692c3.797 0 7.26-1.264 9.984-3.336c.066.435.127.88.194 1.312c.65 4.244 1.219 8.321.926 12.216l7-.075c-.285-4.349-1.395-8.418-2.517-12.267a13.697 13.697 0 0 0 6.097 1.429c7.087 0 12.84-5.255 13.015-11.796C57.99 37.854 62 33.196 62 27.661c0-6.464-5.462-11.727-12.331-12.066M51.76 36.39l-2.176.572l-.061 2.249c-.131 4.895-4.624 8.876-10.016 8.876c-2.843 0-5.528-1.105-7.438-3.029c-.773-2.71-1.469-5.396-1.912-8.114c1.6-.077 3.158-.272 4.721-.56c2.177-.409 4.314-1.022 6.337-1.896c2.02-.87 3.923-2.008 5.558-3.433a17.04 17.04 0 0 0 3.955-5.006a16.903 16.903 0 0 1-4.275 4.635c-1.695 1.264-3.611 2.217-5.61 2.906c-2.001.691-4.089 1.125-6.194 1.36a33.533 33.533 0 0 1-4.757.195c-.444-3.677-.36-7.413.438-11.088c.882-4.106 2.603-8.089 4.862-11.786c-2.738 3.379-5.041 7.168-6.548 11.331c-.875 2.399-1.447 4.914-1.767 7.467a29.608 29.608 0 0 1-2.152-1.318a24.867 24.867 0 0 1-3.592-2.924c-2.188-2.157-3.928-4.866-4.451-7.952c.184 3.122 1.66 6.118 3.699 8.591a25.828 25.828 0 0 0 3.421 3.428c.92.765 1.86 1.475 2.88 2.133a40.114 40.114 0 0 0-.104 3.684c.029 2.048.199 4.079.433 6.089a24.117 24.117 0 0 1-2.218-.254a21.16 21.16 0 0 1-4.48-1.229c-2.885-1.14-5.489-3.067-7.29-5.643c1.509 2.74 3.961 5.016 6.858 6.515a22.319 22.319 0 0 0 4.583 1.773c.914.239 1.828.433 2.764.573c.02.144.043.283.063.427c-2.436 2.443-5.866 3.847-9.465 3.847C10.753 48.809 5 43.563 5 37.116c0-2.509.876-4.911 2.535-6.947l1.421-1.745l-1.278-1.853c-1.202-1.743-1.837-3.743-1.837-5.784c0-6.016 5.376-10.91 11.983-10.91c1.15 0 2.307.157 3.439.465l1.832.5l1.235-1.441C26.728 6.604 30.323 5 34.193 5c6.634 0 12.116 4.733 12.481 10.775l.161 2.683l2.686.133c5.315.263 9.479 4.246 9.479 9.07c0 4.019-2.978 7.608-7.24 8.729" fill="white"/></svg>
            </a>
        </div>
        <div class="header__care">
            <a id="care" href="#">
                <svg class="care-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="50" height="50" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path d="M10.203.561c-.027-.215-.38-.215-.406 0c-.883 7.107-5.398 8.572-5.398 13.512c0 3.053 2.564 5.527 5.601 5.527c3.036 0 5.6-2.475 5.6-5.527c0-4.94-4.514-6.405-5.397-13.512zM9.35 8.418c-.059.219-.123.444-.189.678c-.401 1.424-.856 3.039-.856 4.906c0 1.012-.598 1.371-1.156 1.371a1.161 1.161 0 0 1-1.156-1.166c0-2.207 1.062-3.649 2-4.92c.295-.398.572-.775.797-1.15c.103-.172.38-.164.506.006c.059.08.079.182.054.275z" fill="white"/></svg>
            </a>
        </div>
        <div class="header__avatar">
            <img class="avatar__img" src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=BeardLight&facialHairColor=Black&clotheType=BlazerShirt&eyeType=Wink&eyebrowType=Angry&mouthType=Smile&skinColor=Light'/>
        </div>
        <div class="header__tittle">
            <H1>Galadrassil</H1>
        </div>
        <div class="header__menu">
            <button class="menu__button">Menu</button>
            <a id="icon-menu-jardin1" class="menu__sidebar" href="#">
                    <svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="50" height="50" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path d="M20 5V2H0v3h20zm0 6V8H0v3h20zm0 6v-3H0v3h20z" fill="white"/></svg>
            </a>
            <div class="sidebar">
                    <a id="icon-menu-jardin2" class="menu__sidebar2" href="#">
                        <svg class="sidebar-icon2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="50" height="50" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path d="M20 5V2H0v3h20zm0 6V8H0v3h20zm0 6v-3H0v3h20z" fill="white"/></svg>
                    </a>
                    <ul class="sidebar__list">
                        <li class="list"><a class="link" href="perfil.php">Perfil</a></li>
                        <li class="list"><a class="link" href="topPuntajes.php">Tablas</a></li>
                        <li class="list"><a class="link" href="inicioSesion.php">Cerrar Sesion</a></li>
                    </ul>
            </div>
        </div>
    </header>

    
    <main class="main">
        <div class="backdrop" id="cuerpo"></div>
        <div class="main__sticks">
            <span class="stick stick--guanacaste">     
                <span class="iconify leaf" data-icon="el:leaf" data-inline="false" data-width="50" data-height="50"></span> 
                <span class="tag__stick tag--guanacaste"></span>
            </span>
            <span class="stick stick--pochote">
                    <span class="iconify leaf" data-icon="ion:leaf" data-inline="false" data-width="50" data-height="50"></span>
                <span class="tag__stick tag--pochote"></span>
            </span>
            <span class="stick stick--caoba">
                    <span class="iconify leaf" data-icon="icomoon-free:leaf" data-inline="false" data-width="50" data-height="50"></span>
                <span class="tag__stick tag--caoba"></span>
            </span>
            <span class="stick stick--cortes-amarillo">
                    <span class="iconify leaf" data-icon="fa-brands:canadian-maple-leaf" data-inline="false" data-width="50" data-height="50"></span>
                <span class="tag__stick tag--cortes-amarillo"></span>
            </span>
            <span class="stick stick--malinche">
                    <span class="iconify leaf" data-icon="si-glyph:leaf" data-inline="false" data-width="50" data-height="50"></span>
                <span class="tag__stick tag--malinche"></span>
            </span>
        </div>
        <div class="main__cares">
            <span class="care care--water">
                    <span class="iconify supply" data-icon="jam:water-drop-f" data-inline="false" data-width="50" data-height="50"></span>
                <span class="tag__care tag--water"></span>
            </span>
            <span class="care care--fertilizer">
                    <span class="iconify supply" data-icon="mdi:sack" data-inline="false" data-width="50" data-height="50"></span>
                <span class="tag__care tag--fertilizer"></span>
            </span>
        </div>

    </main>

    <footer class="footer">
        <div class="icons">
            <span class="iconify iconify--color" data-icon="ant-design:facebook-fill" data-inline="false" data-width="50" data-height="50"></span>
            <span class="iconify iconify--color" data-icon="feather:instagram" data-inline="false" data-width="50" data-height="50"></span>
            <span class="iconify iconify--color" data-icon="ant-design:twitter-outline" data-inline="false" data-width="50" data-height="50"></span>
            <span class="iconify iconify--color" data-icon="ant-design:google-plus-outline" data-inline="false" data-width="50" data-height="50"></span>

        </div>
    </footer>
   
    
</body>
</html>