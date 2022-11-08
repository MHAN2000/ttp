<?php

namespace App\Models;

use App\Models\Level;
use App\Models\Subject;
use App\Models\Municipio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    use SoftDeletes;
    
    static $rules = [
		'nombre_realiza' => 'required|min:3',
        'curp' => ['required', 'regex:/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/'],
		'nombre' => 'required|min:3',
		'paterno' => 'required|min:3',
		'materno' => 'required|min:3',
		'telefono' => 'required|digits:10',
		'celular' => 'required|digits:10',
		'correo' => 'required|email',
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

    public function municipio() {
        return $this->belongsTo(Municipio::class, 'id_municipio', 'id');
    }

    public function nivel() {
        return $this->belongsTo(Level::class, 'id_nivel', 'id');
    }

    public function asunto() {
        return $this->belongsTo(Subject::class, 'id_asunto', 'id');
    }
}
