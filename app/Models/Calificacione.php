<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Calificacione
 * 
 * @property int $id_calif
 * @property int $documento
 * @property int $id_periodos
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
 * @property string|null $observaciones
 * @property int|null $sanciones
 * 
 * @property CalifPeriodo $calif_periodo
 *
 * @package App\Models
 */
class Calificacione extends Model
{
	protected $table = 'calificaciones';
	protected $primaryKey = 'id_calif';
	public $timestamps = false;

	protected $casts = [
		'documento' => 'int',
		'id_periodos' => 'int',
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
		'sanciones' => 'int'
	];

	protected $fillable = [
		'documento',
		'id_periodos',
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
		'observaciones',
		'sanciones'
	];

	public function calif_periodo()
	{
		return $this->belongsTo(CalifPeriodo::class, 'id_periodos');
	}
}
