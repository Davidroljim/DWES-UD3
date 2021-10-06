<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio15</title>
</head>
<body>
    
    <?php

    $productos = array();
    $productos[]=array("Nombre"=>"Monitor","Precio"=>"89","Stock"=>"12","Identificador"=>"12345a");
    $productos[]=array("Nombre"=>"Teclado","Precio"=>"54","Stock"=>"6","Identificador"=>"34526f");
    $productos[]=array("Nombre"=>"Raton","Precio"=>"24","Stock"=>"10","Identificador"=>"47834d");
    $valor;
    echo ("<pre>");
    var_dump($productos);
    echo ("</pre>");

    echo "<br>";
    echo '<table border=2>';
    echo "<tr>";
    echo "<th>","Nombre","</th>";
    echo "<th>","Precio","</th>";
    echo "<th>","Stock","</th>";
    echo "<th>","Id","</th>";
    echo "</tr>";
    
    foreach ($productos as $clave => $valor) {
        echo "<tr>";
    echo "<td>";
        echo $valor['Nombre'];
    echo "</td>";
    echo "<td>";
        echo $valor['Precio'];
    echo "</td>";
    echo "<td>";
        echo $valor['Stock'];
    echo "</td>";
    echo "<td>";
        echo $valor['Identificador'];
    echo "</td>";
    echo "</tr>";

    
    
    }
    
    echo "</table>";

    ?>

</body>
</html>