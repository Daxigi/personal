<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsPermisoSalida
 * 
 * @property int $id_salida
 * @property int|null $legajo
 * @property Carbon|null $fecha
 * @property time without time zone|null $hh_desde
 * @property time without time zone|null $hh_hasta
 * @property string|null $func_autoriza
 * @property int|null $documento
 * @property Carbon|null $fealta
 * @property string|null $usualta
 * @property Carbon|null $femod
 * @property string|null $usumod
 *
 * @package App\Models
 */
class AsPermisoSalida extends Model
{
	protected $table = 'as_permiso_salida';
	protected $primaryKey = 'id_salida';
	public $timestamps = false;

	protected $casts = [
		'legajo' => 'int',
		'fecha' => 'datetime',
		'hh_desde' => 'time without time zone',
		'hh_hasta' => 'time without time zone',
		'documento' => 'int',
		'fealta' => 'datetime',
		'femod' => 'datetime'
	];

	protected $fillable = [
		'legajo',
		'fecha',
		'hh_desde',
		'hh_hasta',
		'func_autoriza',
		'documento',
		'fealta',
		'usualta',
		'femod',
		'usumod'
	];
}
