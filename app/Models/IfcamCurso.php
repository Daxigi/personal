<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class IfcamCurso
 * 
 * @property int $id_curso
 * @property string|null $nombre
 * @property Carbon $fe_desde
 * @property Carbon|null $fe_hasta
 * @property string|null $observaciones
 * @property string|null $estado
 * @property time without time zone|null $h_desde
 * @property time without time zone|null $h_hasta
 * @property string|null $dia_1
 * @property string|null $dia_2
 * @property string|null $dia_3
 * 
 * @property Collection|IfcamAlumno[] $ifcam_alumnos
 *
 * @package App\Models
 */
class IfcamCurso extends Model
{
	protected $table = 'ifcam_cursos';
	protected $primaryKey = 'id_curso';
	public $timestamps = false;

	protected $casts = [
		'fe_desde' => 'datetime',
		'fe_hasta' => 'datetime',
		'h_desde' => 'time without time zone',
		'h_hasta' => 'time without time zone'
	];

	protected $fillable = [
		'nombre',
		'fe_desde',
		'fe_hasta',
		'observaciones',
		'estado',
		'h_desde',
		'h_hasta',
		'dia_1',
		'dia_2',
		'dia_3'
	];

	public function ifcam_alumnos()
	{
		return $this->hasMany(IfcamAlumno::class, 'id_curso');
	}
}
