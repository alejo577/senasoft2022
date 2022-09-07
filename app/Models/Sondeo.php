<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sondeo extends Model
{
    use HasFactory;
    protected $table="sondeos";

    protected $fillable=[ 'id','Tema','Pregunta','Poblacion'];
}
