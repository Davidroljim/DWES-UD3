<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
</head>
<body>
    <?php

    $variable1=5;
    $variable2=10;
    $variable3=8;

    if($variable1>$variable2 && $variable1>$variable3){
        echo "La variable mayor es: "+$variable1;
    }else if($variable2>$variable1 && $variable2>$variable3){
        echo "La variable mayor es: "+$variable2;
    }else {
        echo "La variable mayor es: "+$variable3;
    }

    ?>
</body>
</html>