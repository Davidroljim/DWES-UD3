<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

<?php
$var1="";
$var2="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
$usuario=strip_tags($_POST["usuario"]);
$usuario=stripslashes($_POST["usuario"]);
$usuario=htmlspecialchars($_POST["usuario"]);
$contrasenya=$_POST["contrasenya"];

if (preg_match("/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/",$usuario)) {
    $var1="*";
}else{
    $var1="Usuario incorrecto";
}
if (preg_match("/[A-Z][a-z]{15}[0-9]/",$contrasenya)) {
    $var2="*";
}else{
    $var2="Contraseña incorrecta";
}

if (empty($usuario)) {
    echo "el usuario debe estar relleno <br>";
}
if (empty($contrasenya)) {
    echo "la contraseña debe estar rellena <br>";
}

echo "el usuario $usuario tiene la contraseña $contrasenya";
}


?>
    
    <h1>Formulario Actividad Aula</h1>
    <form action=<?php echo htmlentities($_SERVER['PHP_SELF']); ?> method="POST">
        <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" value="<?php echo $usuario?>"/>
            <span style="color:red"><?php echo $var1; ?></span>
        </p>
        <p>
            <label for="contrasenya">Contraseña</label>
            <input type="password" name="contrasenya" value="<?php echo $contrasenya?>"/>
            <span style="color:red"><?php echo $var2; ?></span>
        </p>
        <p>
<input type="submit" name="enviar" value="Aceptar"/>
<input type="reset" name="cancelar" value="Cancelar"/>
  </p>
    </form>
</body>
</html>
