<?php 


//constantes en php, son datos que no varian en la ejecucion del programa, en php para definir una constante se utiliza la palabra const y el nombre d ela constante en mayusculas.

//Para acceder a la constante lo hago tambien con el operador :: como con las variables estaticas,porque la constante es estatica, osea definida a nivel de la clase, aunque la puedo llamar tambien utilizando un objeto, recordar que cuando utilizo un objeto debemos utilizar el operador $this, y cuando me refiero directamente a la clase utilizo self::

   
class Usuario{

    const URL_COMPLETA="http://localhost";

    public $email;
    public $password;

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}



$usuario=new Usuario();
echo $usuario::URL_COMPLETA;

var_dump($usuario)



?>