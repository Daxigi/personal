<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsPersonalAutorizadoExtra
 * 
 * @property int $id_autorizacion
 * @property int $legajo
 * @property Carbon $fe_desde
 * @property Carbon $fe_hasta
 * @property string $autorizante
 * @property int $horas_autorizadas
 * 
 * @property Per001 $per001
 *
 * @package App\Models
 */
class AsPersonalAutorizadoExtra extends Model
{
	protected $table = 'as_personal_autorizado_extras';
	protected $primaryKey = 'id_autorizacion';
	public $timestamps = false;

	protected $casts = [
		'legajo' => 'int',
		'fe_desde' => 'datetime',
		'fe_hasta' => 'datetime',
		'horas_autorizadas' => 'int'
	];

	protected $fillable = [
		'legajo',
		'fe_desde',
		'fe_hasta',
		'autorizante',
		'horas_autorizadas'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'legajo');
	}
}
