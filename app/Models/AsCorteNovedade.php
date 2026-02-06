<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsCorteNovedade
 * 
 * @property int $anio
 * @property int $mes
 * @property Carbon $fecha_corte
 *
 * @package App\Models
 */
class AsCorteNovedade extends Model
{
	protected $table = 'as_corte_novedades';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'anio' => 'int',
		'mes' => 'int',
		'fecha_corte' => 'datetime'
	];

	protected $fillable = [
		'fecha_corte'
	];
}
