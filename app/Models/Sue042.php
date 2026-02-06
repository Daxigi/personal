<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue042
 * 
 * @property int $s42rubro
 * @property string|null $s42concepto
 * @property float|null $s42valor
 * @property string|null $s42tipo_valor
 * @property int $s42anio
 *
 * @package App\Models
 */
class Sue042 extends Model
{
	protected $table = 'sue042';
	public $timestamps = false;

	protected $casts = [
		's42valor' => 'float',
		's42anio' => 'int'
	];

	protected $fillable = [
		's42concepto',
		's42valor',
		's42tipo_valor'
	];
}
