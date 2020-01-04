<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>

    <?php require './inc/styles.php'?>
    <link rel="stylesheet" href="./Assets/css/sidebar.css">
    <link rel="stylesheet" href="./Assets/css/perfil.css">

</head>
<body>

    <?php include './inc/sidebar.php' ?>
    <?php include './inc/header.php' ?>

    <main class="main">
        <div class="main__score">
                <H2 class="score">Puntaje: 5488pts.</H2>
        </div>
        <div class="main__charts">
            
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
    <?php include './inc/scripts.php'?>
    <script>
        var index=false;
        var pass=false;
        var sign=false;
        var home=false;
        var profile=true;
    </script>
    <script src="./Assets/js/app.js"></script>
</body>
</html>