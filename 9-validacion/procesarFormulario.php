<?php 
$error="faltan valores";
if (!empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["edad"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
    # code...
    $error="ok";

    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $edad=$_POST["edad"];
    $email=$_POST["email"];
    $password=$_POST["password"];

}else{
    $error="faltan valores";
    header("Location:index.php?error=$error");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formularios php</title>
</head>
<body>

<h1>Datos validados correctamente</h1>

<?php if($error=="ok"):?>
    <p><?=$nombre ?></p>
    <p><?=$apellidos ?></p>
    <p><?=$edad ?></p>
    <p><?=$email ?></p>
<?php endif; ?>
    
</body>
</html>