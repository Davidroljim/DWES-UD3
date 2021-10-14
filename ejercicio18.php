<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio18</title>
</head>
<body>

<?php
$var1="";
$var2="";     
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
//$poblacion=strip_tags($_POST["poblacion"]);
//$poblacion=stripslashes($_POST["poblacion"]);
//$poblacion=htmlspecialchars($_POST["poblacion"]);

$poblacion=$_POST["poblacion"];
$codigopostal=$_POST["codigopostal"];

if (preg_match("/^[a-zA-Z]+$/",$poblacion)) {
    $var1="";
}else{
    $var1="Solo admite texto";
}
if (preg_match("/^[0-9]+$/",$codigopostal)) {
    $var2="";
}else{
    $var2="Solo adminte números";
}

if (empty($poblacion)) {
    echo "El campo poblacion debe estar relleno <br>";
}
if (empty($codigopostal)) {
    echo "El codigo postal debe estar relleno <br>";
}


}


?>
    
    <h1>Formulario Actividad Aula</h1>
    <form action=<?php echo htmlentities($_SERVER['PHP_SELF']); ?> method="POST">
        <p>
            <label for="poblacion">poblacion</label>
            <input type="text" name="poblacion" value="<?php echo $poblacion?>"/>
            <span style="color:red"><?php echo $var1; ?></span>
        </p>
        <p>
            <label for="codigopostal">Codigo Postal</label>
            <input type="text" name="codigopostal" value="<?php echo $codigopostal?>"/>
            <span style="color:red"><?php echo $var2; ?></span>
        </p>
        <p>

        <p>Provincias</p>

        <div>
        <input type="radio" id="huelva" name="provincia" value="huelva">
        <label for="huelva">Huelva</label>
        </div>

        <div>
        <input type="radio" id="sevilla" name="provincia" value="sevilla">
        <label for="sevilla">Sevilla</label>
        </div>

        <div>
        <input type="radio" id="cordoba" name="provincia" value="cordoba">
        <label for="cordoba">Cordoba</label>
        </div>

        <div>
        <input type="radio" id="jaen" name="provincia" value="jaen">
        <label for="jaen">Jaén</label>
        </div>

        <div>
        <input type="radio" id="granada" name="provincia" value="granada">
        <label for="granada">Granada</label>
        </div>

        <div>
        <input type="radio" id="cadiz" name="provincia" value="cadiz">
        <label for="cadiz">Cádiz</label>
        </div>

        <div>
        <input type="radio" id="almeria" name="provincia" value="almeria">
        <label for="almeria">Almería</label>
        </div>

        <div>
        <input type="radio" id="malaga" name="provincia" value="malaga">
        <label for="malaga">Málaga</label>
        </div>
        <br>

        <input type="text" name="text" placeholder="Inserte aqui el texto" value="<?php echo $text?>">
        <br><br>
<input type="submit" name="enviar" value="Aceptar"/>
<input type="reset" name="cancelar" value="Cancelar"/>
  </p>
    </form>
</body>
</html>