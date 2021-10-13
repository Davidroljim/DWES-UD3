<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio17</title>
</head>
<body>

<?php
$var1="";
$var2="";
$institutos="";
$estudios="";
$text="";
$nombre="";
$apellidos="";
$direccion="";
$historia="";
$geografia="";
$lengua="";
$matematicas="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
$nombre=strip_tags($_POST["nombre"]);
$nombre=stripslashes($_POST["nombre"]);
$nombre=htmlspecialchars($_POST["nombre"]);

$apellidos=strip_tags($_POST["apellidos"]);
$apellidos=stripslashes($_POST["apellidos"]);
$apellidos=htmlspecialchars($_POST["apellidos"]);

$direccion=strip_tags($_POST["direccion"]);
$direccion=stripslashes($_POST["direccion"]);
$direccion=htmlspecialchars($_POST["direccion"]);

$estudios=strip_tags($_POST["estudios"]);
$estudios=stripslashes($_POST["estudios"]);
$estudios=htmlspecialchars($_POST["estudios"]);

$text=strip_tags($_POST["text"]);
$text=stripslashes($_POST["text"]);
$text=htmlspecialchars($_POST["text"]);

$institutos=$_POST["institutos"];
$dias=$_POST["dias"];
$historia=$_POST["historia"];
$geografia=$_POST["geografia"];
$lengua=$_POST["lengua"];
$matematicas=$_POST["matematicas"];
$wifi=$_POST["wifi"];
$cable=$_POST["cable"];
$fibra=$_POST["fibra"];

if (preg_match("/^IES/",$institutos)) {
    $var1="";
}else{
    $var1="El nombre del instituto debe empezar por IES";
}

if (empty($nombre)) {
    echo "el nombre debe estar relleno <br>";
}
if (empty($apellidos)) {
    echo "la apellido debe estar relleno <br>";
}
if (empty($direccion)) {
    echo "la direccion debe estar rellena <br>";
}
if (empty($institutos)) {
    echo "el instituto debe estar relleno <br>";
}
if (empty($estudios)) {
    echo "los estudios deben estar rellenos <br>";
}
if (empty($dias)) {
    echo "Selecciona un día <br>";
}



if (empty($historia)&&empty($geografia)&&empty($lengua)&&empty($matematicas)) {
    echo "Selecciona una preferencia.";
}
}


?>
    
    <h1>Formulario Actividad Aula</h1>
    <form action=<?php echo htmlentities($_SERVER['PHP_SELF']); ?> method="POST">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $nombre?>"/>
            <span style="color:red"></span>
        </p>
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" value="<?php echo $apellidos?>"/>
            <span style="color:red"></span>
        </p>
        <p>
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" value="<?php echo $direccion?>"/>
            <span style="color:red"></span>
        </p>
        <p>

        <div>
        <input type="radio" id="Wifi" name="wifi" value="Wifi">
        <label for="Wifi">Wifi</label>
        </div>

        <div>
        <input type="radio" id="cable" name="cable" value="cable">
        <label for="cable">Cable</label>
        </div>

        <div>
        <input type="radio" id="fibra" name="fibra" value="fibra">
        <label for="fibra">Fibra</label>
        </div>
        <br>

        <p>
            <label for="institutos">Institutos</label>
            <input type="institutos" name="institutos" value="<?php echo $institutos?>"/>
            <span style="color:red"><?php echo $var1?></span>
        </p>
        <p>
            <label for="estudios">Estudios Elegidos</label>
            <input type="text" name="estudios" value="<?php echo $estudios?>"/>
            <span style="color:red"></span>
        </p>

        <br><br>
        <select name="dias" id="dias" multiple>
            <option value="lunes">Lunes</option>    
            <option value="martes">Martes</option>
            <option value="miercoles">Miercoles</option>
            <option value="jueves">Jueves</option>
            <option value="viernes">Viernes</option>
        </select>
        <br><br>
        
                <p>Preferencias</p>

        <div>
        <input type="checkbox" id="historia" name="historia">
        <label for="historia">Historia</label>
        </div>

        <div>
        <input type="checkbox" id="geografía" name="geografia">
        <label for="geografía">Geografía</label>
        </div>

        <div>
        <input type="checkbox" id="lengua" name="lengua">
        <label for="lengua">Lengua</label>
        </div>

        <div>
        <input type="checkbox" id="matematicas" name="matematicas">
        <label for="matematicas">Matemáticas</label>
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