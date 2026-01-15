<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = ["entradilla", "cuerpo", "titular", "fecha"];
}
