<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsHorasExtra
 * 
 * @property int $id_horas
 * @property int $legajo
 * @property Carbon $fecha
 * @property time without time zone $horas
 * @property time without time zone|null $h_desde
 * @property time without time zone|null $h_hasta
 * @property string|null $estado_c
 * 
 * @property Per001 $per001
 *
 * @package App\Models
 */
class AsHorasExtra extends Model
{
	protected $table = 'as_horas_extras';
	protected $primaryKey = 'id_horas';
	public $timestamps = false;

	protected $casts = [
		'legajo' => 'int',
		'fecha' => 'datetime',
		'horas' => 'time without time zone',
		'h_desde' => 'time without time zone',
		'h_hasta' => 'time without time zone'
	];

	protected $fillable = [
		'legajo',
		'fecha',
		'horas',
		'h_desde',
		'h_hasta',
		'estado_c'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'legajo');
	}
}
