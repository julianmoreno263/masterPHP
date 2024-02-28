<?php 

#conectar bd usando la libreria mysqli
$conexion=mysqli_connect("localhost","root","","phpmysql");

#comprobar si la conexion es correcta con mysqli_connect_errno()
if(mysqli_connect_errno()){
    echo "La conexion a la bd ha fallado:" . mysqli_connect_error();
}else{
    echo "<h3><strong>Conexion realizada correctamente!</strong></h3><br>";
}

#setear la codificacion de caracteres por medio de una consulta mysqli_query()
mysqli_query($conexion,"set names 'utf8'");

#consulta a la bd select desde php utilizando mysqli_fetch_assoc() para recorrer el resulset de la consulta
$query=mysqli_query($conexion,"select * from notas");
while($nota=mysqli_fetch_assoc($query)){
    // var_dump($nota);
    echo "<h2>$nota[titulo]</h2> ";
    echo $nota['descripcion'] . '<br>';
    echo '<hr>';
}


#consulta para insertar en la bd desde php
$sql="insert into notas values(null,'nota desde php','esta es una nota echa desde php','green')";
$insert=mysqli_query($conexion,$sql);

if($insert){
    echo "Datos insertados correctamente";
}else{
    echo "Error:" . mysqli_error($conexion);
}




?>