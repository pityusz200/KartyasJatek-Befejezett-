<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boot/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/KartyasJatekIndex.css">
    <script src="scripts/KartyasJatekIndex.js"></script>
    <title>Kártyás Játék</title>
</head>
<body style="background-color: #cce0ff;">

    <button class="start" onmouseover="myScriptIN()" onmouseout="myScriptOUT()" onclick="window.location.href='KartyasJatek.php'"><h1 class="cim">Test</h1></button>
    <div class="container" style= "margin-top: 80px;">
    <?php
        for ($i=0; $i < 10; $i++) { 
            echo '<div class="row">';
            for ($j=0; $j < 4; $j++) { 
                echo '<div class="col-sm-3 box"><img src="kepek/test.jpg" class="img-thumbnail" alt="kep"><h1>Kati Béla</h1></div>';
            }
            echo '</div>';
        }
    ?>
        </div>

</body>
</html>