<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsUbra
 * 
 * @property int $id_ubra
 * @property int|null $documento
 * @property Carbon|null $fe_entrada
 * @property time without time zone|null $hh_entrada
 * @property Carbon|null $fe_salida
 * @property time without time zone|null $hh_salida
 * @property Carbon|null $procesado
 * @property string|null $comentario
 * @property time without time zone|null $entrada_manual
 * @property time without time zone|null $salida_manual
 * @property int|null $sensorid_e
 * @property int|null $sensorid_s
 * @property string|null $imagen_e
 * @property string|null $imagen_s
 * @property USER-DEFINED|null $the_geom_e
 * @property USER-DEFINED|null $the_geom_s
 * @property string|null $ip_e
 * @property string|null $ip_s
 *
 * @package App\Models
 */
class AsUbra extends Model
{
	protected $table = 'as_ubra';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_ubra' => 'int',
		'documento' => 'int',
		'fe_entrada' => 'datetime',
		'hh_entrada' => 'time without time zone',
		'fe_salida' => 'datetime',
		'hh_salida' => 'time without time zone',
		'procesado' => 'datetime',
		'entrada_manual' => 'time without time zone',
		'salida_manual' => 'time without time zone',
		'sensorid_e' => 'int',
		'sensorid_s' => 'int',
		'the_geom_e' => 'USER-DEFINED',
		'the_geom_s' => 'USER-DEFINED'
	];

	protected $fillable = [
		'id_ubra',
		'documento',
		'fe_entrada',
		'hh_entrada',
		'fe_salida',
		'hh_salida',
		'procesado',
		'comentario',
		'entrada_manual',
		'salida_manual',
		'sensorid_e',
		'sensorid_s',
		'imagen_e',
		'imagen_s',
		'the_geom_e',
		'the_geom_s',
		'ip_e',
		'ip_s'
	];
}
