<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>

<h1>Formulario en PHP</h1>

<form action="8-recibir.php" method="post">

    <p>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="">
    </p>
    
    <p>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="">
    </p>

    <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="">
    </p>

    <input type="submit" value="Enviar Datos">
    
</form>
    
</body>
</html>