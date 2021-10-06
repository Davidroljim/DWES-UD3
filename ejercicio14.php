<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerciio14</title>
</head>
<body>
    <?php

    $Meses = [];
    $Meses[]="ENERO";
    $Meses[]="FEBRERO";
    $Meses[]="MARZO";

    var_dump($Meses);
    echo "<br>";
    echo count($Meses);
    echo "<br>";

    $Meses[]=7;
    $Meses[]="ABRIL";
    $Meses[]=TRUE;
    $Meses[]="JUNIO";

    var_dump($Meses);
    echo "<br>";
    echo "Número de variables en el array: "+count($Meses);
    echo "<br>";

    unset($Meses[3]);

    $Meses[5]="MAYO";  
    $Meses[]="JULIO";
    $Meses[]="AGOSTO"; 
    $Meses[]="SEPTIEMBRE"; 
    $Meses[]="OCTUBRE"; 
    $Meses[]="NOVIEMBRE"; 
    $Meses[]="DICIEMBRE";  
    var_dump($Meses); 
    ?>
</body>
</html>