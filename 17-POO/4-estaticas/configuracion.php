<?php 

//metodos estaticos son aquellos que no es necesario crear un objeto de la clase para poder usarlos, se utiliza la propia clase para usarlos. La sintaxis para llamar a las variables dentro de los setters y getters statics es con :  self::nombre de variable y el metodo debe llevar la palabra static.

//estos metodos estaticos son utiles cuando necesitamos crear un metodo que haga algo pero que no sea necesario instanciar la clase para poder usarlo.

class Configuracion{

    public static $color;
    public static $newsletter;
    public static $entorno;

    //getters y setters   

    /**
     * Get the value of color
     */ 
    public static function getColor()
    {
        return self::$color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public static function setColor($color)
    {
        self::$color=$color;
    }

    /**
     * Get the value of newsletter
     */ 
    public static function getNewsletter()
    {
        return self::$newsletter;
    }

    /**
     * Set the value of newsletter
     *
     * @return  self
     */ 
    public static function setNewsletter($newsletter)
    {
        self::$newsletter=$newsletter;
    }

    /**
     * Get the value of entorno
     */ 
    public static function getEntorno()
    {
        return self::$entorno;
    }

    /**
     * Set the value of entorno
     *
     * @return  self
     */ 
    public static function setEntorno($entorno)
    {
        self::$entorno=$entorno;
    }
}



?>