<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Record
 *
 * @property $id
 * @property $nombre_realiza
 * @property $curp
 * @property $nombre
 * @property $paterno
 * @property $materno
 * @property $telefono
 * @property $celular
 * @property $correo
 * @property $id_nivel
 * @property $id_municipio
 * @property $id_asunto
 * @property $created_at
 * @property $updated_at
 *
 * @property Level $level
 * @property Municipio $municipio
 * @property Subject $subject
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Record extends Model
{
    
    static $rules = [
		'nombre_realiza' => 'required',
		'curp' => 'required',
		'nombre' => 'required',
		'paterno' => 'required',
		'materno' => 'required',
		'telefono' => 'required',
		'celular' => 'required',
		'correo' => 'required',
		'id_nivel' => 'required',
		'id_municipio' => 'required',
		'id_asunto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_realiza','curp','nombre','paterno','materno','telefono','celular','correo','id_nivel','id_municipio','id_asunto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function level()
    {
        return $this->hasOne('App\Models\Level', 'id', 'id_nivel');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'id_municipio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subject()
    {
        return $this->hasOne('App\Models\Subject', 'id', 'id_asunto');
    }
    

}
