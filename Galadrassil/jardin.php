<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jardín</title>

    <?php require './inc/styles.php'?>
    <link rel="stylesheet" href="./Assets/css/sidebar.css">
    <link rel="stylesheet" href="./Assets/css/modal.css">
    <link rel="stylesheet" href="./Assets/css/jardinBase.css">
    <link rel="stylesheet" href="./Assets/css/jardin.css">
</head>
<body>

    <div id="b" class="b">
        <?php include './inc/sidebar.php' ?>
        <?php include './inc/header.php' ?>
        

        <main class="main">
        <?php include './inc/cruck.php'?>
        </main>

        <footer class="footer">
        <div class="icons">
            <span class="iconify iconify--color" data-icon="ant-design:facebook-fill" data-inline="false" data-width="50" data-height="50"></span>
            <span class="iconify iconify--color" data-icon="feather:instagram" data-inline="false" data-width="50" data-height="50"></span>
            <span class="iconify iconify--color" data-icon="ant-design:twitter-outline" data-inline="false" data-width="50" data-height="50"></span>
            <span class="iconify iconify--color" data-icon="ant-design:google-plus-outline" data-inline="false" data-width="50" data-height="50"></span>

        </div>
    </footer>
    </div>
    
    <?php include './inc/modal.php' ?>
    <?php include './inc/scripts.php'?>
    <script>
        var index=false;
        var pass=false;
        var sign=false;
        var home=true;
    </script>
    <script src="./Assets/js/app.js"></script>
</body>
</html>