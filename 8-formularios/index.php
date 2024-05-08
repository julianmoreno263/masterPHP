<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Formulario en HTML</h1>
    <form action="#" method="post">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="" autofocus="autofocus" maxlength="8" required placeholder="Nombre">
        </p>
        <p>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="" maxlength="8" required placeholder="Apellido">
        </p>

        <p>
            <label for="apellido">Apellido</label>
            <input type="button" name="boton" id="" value="Dar Click">
        </p>

        <label for="sexo">Sexo:</label>
        <p>
            Hombre<input type="checkbox" name="sexo" id="" value="Hombre" checked>
            Mujer<input type="checkbox" name="sexo" id="" value="Mujer">
        </p>

        <p>
            <label for="color">Dar click y elige un color</label>
            <input type="color" name="color" id="">
        </p>

        <p>
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="">
        </p>

        <p>
            <label for="email">Email</label>
            <input type="email" name="email" id="">
        </p>

        <p>
            <label for="archivo">Archivo</label>
            <input type="file" name="archivo" id="" multiple="multiple">
        </p>

        <p>
            <label for="numeros">Numeros</label>
            <input type="number" name="numeros" id="">
        </p>

        <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="">
        </p>

        <label for="continente">Continente:</label>
        <p>
            Suramerica<input type="radio" name="continente" id="" value="Suramerica">
            Europa<input type="radio" name="continente" id="" value="Europa">
            Asia<input type="radio" name="continente" id="" value="Asia">
        </p>

        <p>
            <label for="url">Página web</label>
            <input type="url" name="url" id="">
        </p>

        <p>
            <label for="area">Text Area</label>
            <textarea name="area" id="" cols="30" rows="8"></textarea>
        </p>

        <p>
            <label for="pelis">Películas</label>
            <select name="pelis" id="">
                <option value="Spiderman" selected>Spiderman</option>
                <option value="Seven">Seven</option>
                <option value="Batman">Batman</option>
                <option value="Superman">Superman</option>
            </select>
        </p>

        <br>
        <input type="submit" value="Enviar">

    </form>

    
</body>
</html>