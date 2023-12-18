<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación formularios en php</title>
</head>
<body>

<h1>Validar formularios en php</h1>

<?php 
    
    //codigo para mostrar los errores en pantalla
    if (isset($_GET["error"])) {
        # code...
        $error=$_GET["error"];

        if($error=="faltan valores"){
            echo "<strong style='color:red'>Introduce todos los datos en los campos</strong>";
        }

        if($error=="nombre"){
            echo "<strong style='color:red'>Nombre invalido</strong>";
        }

        if($error=="apellido"){
            echo "<strong style='color:red'>Apellido invalido</strong>";
        }

        if($error=="edad"){
            echo "<strong style='color:red'>Edad invalida</strong>";
        }

        if($error=="email"){
            echo "<strong style='color:red'>Email invalido</strong>";
        }

        if($error=="password"){
            echo "<strong style='color:red'>Password invalido</strong>";
        }
    }
?>

<form action="procesarFormulario.php" method="post">

    <label for="nombre">Nombre</label><br>
    <input type="text" name="nombre" id="" required pattern="[A-Za-z]+"><br>

    <label for="apellidos">Apellidos</label><br>
    <input type="text" name="apellidos" id="" required pattern="[A-Za-z]+"><br>

    <label for="edad">Edad</label><br>
    <input type="number" name="edad" id="" required pattern="[0-9]+"><br>

    <label for="email">Email</label><br>
    <input type="email" name="email" id="" required><br>

    <label for="password">Password</label><br>
    <input type="password" name="password" id="" required><br><br>

    <input type="submit" value="Enviar">

</form>
    
</body>
</html>