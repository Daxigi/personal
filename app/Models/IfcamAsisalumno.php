<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IfcamAsisalumno
 * 
 * @property int $id_asalum
 * @property int $id_asiste
 * @property int|null $id_alumno
 * @property int|null $documento
 * @property time without time zone|null $h_desde_alum
 * @property time without time zone|null $h_hasta_alum
 * @property string|null $observaciones
 * @property string|null $estado
 *
 * @package App\Models
 */
class IfcamAsisalumno extends Model
{
	protected $table = 'ifcam_asisalumno';
	protected $primaryKey = 'id_asalum';
	public $timestamps = false;

	protected $casts = [
		'id_asiste' => 'int',
		'id_alumno' => 'int',
		'documento' => 'int',
		'h_desde_alum' => 'time without time zone',
		'h_hasta_alum' => 'time without time zone'
	];

	protected $fillable = [
		'id_asiste',
		'id_alumno',
		'documento',
		'h_desde_alum',
		'h_hasta_alum',
		'observaciones',
		'estado'
	];
}
