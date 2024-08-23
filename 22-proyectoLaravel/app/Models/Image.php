<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table='images';

    //relacion One to Many/ de uno a muchos, una imagen podra tener muchos comentarios
    public function comments(){
        return $this->hasMany('App\Comment');
    }

     //relacion One to Many/ de uno a muchos, una imagen podra tener muchos likes
     public function likes(){
        return $this->hasMany('App\Like');
    }

     //relacion Many to One/ de muchos a uno,muchas imagenes pueden haber sido creadas por un unico usuario, este metodo buscara los objetos usuario
     public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
