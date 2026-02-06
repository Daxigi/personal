<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cobrabilidad
 * 
 * @property int $orden
 * @property int $cuil
 * @property string|null $razon_social
 * @property float|null $nominal_inmo
 * @property float|null $interes_inmo
 * @property float|null $nominal_auto
 * @property float|null $interes_auto
 * @property float|null $nominal_moto
 * @property float|null $interes_moto
 * @property float|null $nominal_comercio
 * @property float|null $interes_comercio
 * @property float|null $nominal_cementerio
 * @property float|null $interes_cementerio
 * @property float|null $nominal_plan
 * @property float|null $interes_plan
 * @property float|null $total
 * @property float|null $interes_ahorrado
 * @property float|null $sin_interes
 * @property float|null $cuota
 * @property int|null $anio
 * @property int|null $mes
 * @property bool|null $activo
 *
 * @package App\Models
 */
class Cobrabilidad extends Model
{
	protected $table = 'cobrabilidad';
	public $timestamps = false;

	protected $casts = [
		'cuil' => 'int',
		'nominal_inmo' => 'float',
		'interes_inmo' => 'float',
		'nominal_auto' => 'float',
		'interes_auto' => 'float',
		'nominal_moto' => 'float',
		'interes_moto' => 'float',
		'nominal_comercio' => 'float',
		'interes_comercio' => 'float',
		'nominal_cementerio' => 'float',
		'interes_cementerio' => 'float',
		'nominal_plan' => 'float',
		'interes_plan' => 'float',
		'total' => 'float',
		'interes_ahorrado' => 'float',
		'sin_interes' => 'float',
		'cuota' => 'float',
		'anio' => 'int',
		'mes' => 'int',
		'activo' => 'bool'
	];

	protected $fillable = [
		'razon_social',
		'nominal_inmo',
		'interes_inmo',
		'nominal_auto',
		'interes_auto',
		'nominal_moto',
		'interes_moto',
		'nominal_comercio',
		'interes_comercio',
		'nominal_cementerio',
		'interes_cementerio',
		'nominal_plan',
		'interes_plan',
		'total',
		'interes_ahorrado',
		'sin_interes',
		'cuota',
		'anio',
		'mes',
		'activo'
	];
}
