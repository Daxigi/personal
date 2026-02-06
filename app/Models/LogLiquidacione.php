<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LogLiquidacione
 * 
 * @property int $id
 * @property int|null $codliq
 * @property int|null $tipoliq
 * @property Carbon|null $feini
 * @property Carbon|null $fefin
 * @property time without time zone|null $duracion
 * @property int|null $registros
 * @property string|null $situacion
 *
 * @package App\Models
 */
class LogLiquidacione extends Model
{
	protected $table = 'log_liquidaciones';
	public $timestamps = false;

	protected $casts = [
		'codliq' => 'int',
		'tipoliq' => 'int',
		'feini' => 'datetime',
		'fefin' => 'datetime',
		'duracion' => 'time without time zone',
		'registros' => 'int'
	];

	protected $fillable = [
		'codliq',
		'tipoliq',
		'feini',
		'fefin',
		'duracion',
		'registros',
		'situacion'
	];
}
