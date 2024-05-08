<?php 
$error="faltan valores";
if (!empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["edad"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
    # code...
    $error="ok";

    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $edad=(int)$_POST["edad"];
    $email=$_POST["email"];
    $password=$_POST["password"];

    //validar los campos, la funcion preg_match valida si es o no un numero o un string segun lo que le indiquemos con expresiones regulares.
    if(!is_string($nombre) || preg_match("/[0-9]+/",$nombre)){
        $error="nombre";
       
    };

    if(!is_string($apellidos) || preg_match("/[0-9]+/",$apellidos)){
        $error="apellido";
      
    };

    if(!is_int($edad) || filter_var($edad,FILTER_VALIDATE_INT)){
        $error="edad";
    };

    if(!is_string($email) || filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error="email";
    };

    if(empty($password) || strlen($password)<5){
        $error="password";
    };

    // var_dump($_POST);
    // var_dump($error);
    // die();

   

}else{
    $error="faltan valores";
}

if($error!="ok"){
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