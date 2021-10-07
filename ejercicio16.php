<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio16</title>
</head>
<body>
    
    <?php
    $mult1=3;
    $mult2=7;
    
    include "funciones.inc.php";
    //include_once "funciones2.inc.php";
    //require "funciones2.inc.php";
    $mostrar =multiplicacion($mult1, $mult2);
    echo $mostrar;
    echo "Hola";    ?>

</body>
</html>