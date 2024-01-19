<?php 

#1- crear una funcion que valide un email
#2- la funcion debe validar un email con filter_var, se le pasa un email por la url
#3- recoger la variable por get y validarla
#4- mostrar resultado

function validarEmail($email){
    $status='No valido';
    if (!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $status='Valido';
    };

    return $status;
}

//validamos si hay un email por la url
if (isset($_GET['email'])) {
    echo validarEmail($_GET['email']);
}else{
    echo "Pasa por get un email";
}






?>