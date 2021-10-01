<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio3</title>
</head>
<body>
    
<?php

    $var1=4;
    switch ($var1) {
        case '1':
            echo "Es Lunes";
            break;
        
        case '2':
                echo "Es Martes";
                break;
        
        case '3':
            echo "Es Miercoles";
            break;

        case '4':
            echo "Es Jueves";
            break;

        case '5':
            echo "Es Viernes ";
            break;

            case '6':
                echo "Es Sabado";
                break;
        case '7':
            echo "Es Domingo";
            break;
        default:
            echo "Día de la semana incorrecto";
            break;
    }

?>

</body>
</html>