<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sondeo
 *
 * @property $id
 * @property $Tema
 * @property $Pregunta
 * @property $Poblacion
 * @property $Imagen
 * @property $created_at
 * @property $updated_at
 *
 * @property Respuestasondeo[] $respuestasondeos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sondeo extends Model
{

    static $rules = [
		'Tema' => 'required',
		'Pregunta' => 'required',
		'Poblacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Tema','Pregunta','Poblacion','Imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function respuestasondeos()
    {
        return $this->hasMany('App\Models\Respuestasondeo', 'Pregunta', 'Pregunta');
    }


}
