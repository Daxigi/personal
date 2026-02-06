<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsTempCont
 * 
 * @property int|null $p09legajo
 * @property Carbon|null $p09fenov
 * @property string|null $sit_rev9
 * @property int|null $sit_rev
 * @property string|null $p09tipo_nov
 * @property string|null $tipo
 * @property string|null $p09obs
 * @property int|null $p09corr
 * @property Carbon|null $fecha_desde
 * @property Carbon|null $fecha_hasta
 * @property int|null $dias
 * @property int|null $mes
 * @property int|null $anio
 *
 * @package App\Models
 */
class AsTempCont extends Model
{
	protected $table = 'as_temp_cont';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p09legajo' => 'int',
		'p09fenov' => 'datetime',
		'sit_rev' => 'int',
		'p09corr' => 'int',
		'fecha_desde' => 'datetime',
		'fecha_hasta' => 'datetime',
		'dias' => 'int',
		'mes' => 'int',
		'anio' => 'int'
	];

	protected $fillable = [
		'p09legajo',
		'p09fenov',
		'sit_rev9',
		'sit_rev',
		'p09tipo_nov',
		'tipo',
		'p09obs',
		'p09corr',
		'fecha_desde',
		'fecha_hasta',
		'dias',
		'mes',
		'anio'
	];
}
