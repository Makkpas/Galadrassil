<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jardín</title>

    <?php require './inc/styles.php'?>
    <link rel="stylesheet" href="./Assets/css/sidebar.css">
    <link rel="stylesheet" href="./Assets/css/jardin.css">
</head>
<body>
    <?php include './inc/sidebar.php' ?>
    <?php include './inc/header.php' ?>
    

    
    <main class="main">
        <!-- <div class="backdrop" id="cuerpo"></div>
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
        </div> -->
        <div class="garden">
            <div class="tree"></div>
            <div class="tree"></div>
            <div class="tree"></div>
            <div class="tree"></div>
            <div class="tree"></div>
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
        var home=true;
    </script>
    <script src="./Assets/js/app.js"></script>
</body>
</html>