<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsOficialSalida
 * 
 * @property int $id_oficial
 * @property int|null $legajo
 * @property int|null $documento
 * @property Carbon|null $fecha
 * @property time without time zone|null $hh_desde
 * @property time without time zone|null $hh_hasta
 * @property string|null $func_autoriza
 * @property string|null $donde_va
 * @property Carbon|null $fealta
 * @property string|null $usualta
 * @property Carbon|null $femod
 * @property string|null $usumod
 * 
 * @property Per001|null $per001
 *
 * @package App\Models
 */
class AsOficialSalida extends Model
{
	protected $table = 'as_oficial_salida';
	protected $primaryKey = 'id_oficial';
	public $timestamps = false;

	protected $casts = [
		'legajo' => 'int',
		'documento' => 'int',
		'fecha' => 'datetime',
		'hh_desde' => 'time without time zone',
		'hh_hasta' => 'time without time zone',
		'fealta' => 'datetime',
		'femod' => 'datetime'
	];

	protected $fillable = [
		'legajo',
		'documento',
		'fecha',
		'hh_desde',
		'hh_hasta',
		'func_autoriza',
		'donde_va',
		'fealta',
		'usualta',
		'femod',
		'usumod'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'legajo');
	}
}
