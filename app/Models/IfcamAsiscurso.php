<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class IfcamAsiscurso
 * 
 * @property int $id_asiste
 * @property int|null $id_curso
 * @property Carbon $fecha
 * @property time without time zone|null $h_desde
 * @property time without time zone|null $h_hasta
 * @property string|null $observaciones
 * @property string|null $estado
 *
 * @package App\Models
 */
class IfcamAsiscurso extends Model
{
	protected $table = 'ifcam_asiscurso';
	protected $primaryKey = 'id_asiste';
	public $timestamps = false;

	protected $casts = [
		'id_curso' => 'int',
		'fecha' => 'datetime',
		'h_desde' => 'time without time zone',
		'h_hasta' => 'time without time zone'
	];

	protected $fillable = [
		'id_curso',
		'fecha',
		'h_desde',
		'h_hasta',
		'observaciones',
		'estado'
	];
}
