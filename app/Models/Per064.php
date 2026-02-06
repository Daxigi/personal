<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Per064
 * 
 * @property int $p64anio_vigencia_rangos
 * @property int $p64antiguedad_desde
 * @property int $p64dias_licencia
 * @property string|null $p64doc_aval
 *
 * @package App\Models
 */
class Per064 extends Model
{
	protected $table = 'per064';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p64anio_vigencia_rangos' => 'int',
		'p64antiguedad_desde' => 'int',
		'p64dias_licencia' => 'int'
	];

	protected $fillable = [
		'p64dias_licencia',
		'p64doc_aval'
	];
}
