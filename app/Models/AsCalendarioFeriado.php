<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsCalendarioFeriado
 * 
 * @property Carbon $cal_fecha
 * @property string|null $cal_descr
 * @property time without time zone|null $tolerancia
 * @property int|null $cod_exc
 *
 * @package App\Models
 */
class AsCalendarioFeriado extends Model
{
	protected $table = 'as_calendario_feriados';
	protected $primaryKey = 'cal_fecha';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cal_fecha' => 'datetime',
		'tolerancia' => 'time without time zone',
		'cod_exc' => 'int'
	];

	protected $fillable = [
		'cal_descr',
		'tolerancia',
		'cod_exc'
	];
}
