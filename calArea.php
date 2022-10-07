<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $with=$_POST["width"];
    $height=$_POST["Hight"];

    $area=$with*$height;
    echo "<h1>".$area."</h1>";

    

    ?>

</body>
</html>