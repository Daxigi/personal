<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CalificacionesBk
 * 
 * @property int $documento
 * @property int $anio
 * @property int $mes
 * @property string $tipo_calificacion
 * @property int|null $asistencia
 * @property int|null $puntualidad
 * @property int|null $dedicacion_horaria
 * @property int|null $predisposicion
 * @property int|null $iniciativa
 * @property int|null $equipo
 * @property int|null $servidor
 * @property int|null $pulcritud
 * @property int|null $aptitud
 * @property int|null $eficiencia
 * @property string $evaluador
 * @property string $cargo_evaluador
 * @property string|null $conformidad
 * @property bool|null $descargo
 * @property int|null $documento_evaluador
 * @property int|null $sanciones
 * @property string|null $observaciones
 * @property int $id_calif
 *
 * @package App\Models
 */
class CalificacionesBk extends Model
{
	protected $table = 'calificaciones_bk';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'documento' => 'int',
		'anio' => 'int',
		'mes' => 'int',
		'asistencia' => 'int',
		'puntualidad' => 'int',
		'dedicacion_horaria' => 'int',
		'predisposicion' => 'int',
		'iniciativa' => 'int',
		'equipo' => 'int',
		'servidor' => 'int',
		'pulcritud' => 'int',
		'aptitud' => 'int',
		'eficiencia' => 'int',
		'descargo' => 'bool',
		'documento_evaluador' => 'int',
		'sanciones' => 'int',
		'id_calif' => 'int'
	];

	protected $fillable = [
		'asistencia',
		'puntualidad',
		'dedicacion_horaria',
		'predisposicion',
		'iniciativa',
		'equipo',
		'servidor',
		'pulcritud',
		'aptitud',
		'eficiencia',
		'evaluador',
		'cargo_evaluador',
		'conformidad',
		'descargo',
		'documento_evaluador',
		'sanciones',
		'observaciones',
		'id_calif'
	];
}
