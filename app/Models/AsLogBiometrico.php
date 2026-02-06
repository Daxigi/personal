<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsLogBiometrico
 * 
 * @property int $id_log_bio
 * @property int $id_biometrico
 * @property Carbon|null $fecha_hora
 * @property int $logid_min
 * @property int $logid_max
 * @property int $cantidad_marcado
 * @property int $cantidad_no_marcado
 * @property int $cantidad_procesado
 * @property bool|null $activo
 *
 * @package App\Models
 */
class AsLogBiometrico extends Model
{
	protected $table = 'as_log_biometricos';
	protected $primaryKey = 'id_log_bio';
	public $timestamps = false;

	protected $casts = [
		'id_biometrico' => 'int',
		'fecha_hora' => 'datetime',
		'logid_min' => 'int',
		'logid_max' => 'int',
		'cantidad_marcado' => 'int',
		'cantidad_no_marcado' => 'int',
		'cantidad_procesado' => 'int',
		'activo' => 'bool'
	];

	protected $fillable = [
		'id_biometrico',
		'fecha_hora',
		'logid_min',
		'logid_max',
		'cantidad_marcado',
		'cantidad_no_marcado',
		'cantidad_procesado',
		'activo'
	];
}
