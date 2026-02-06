<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue040Old
 * 
 * @property Carbon $s40fpv
 * @property int $s40mes
 * @property float|null $s40gnoimp
 * @property float|null $s40conyuge
 * @property float|null $s40hijo
 * @property float|null $s40otros
 * @property float|null $s40deduccion
 *
 * @package App\Models
 */
class Sue040Old extends Model
{
	protected $table = 'sue040_old';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's40fpv' => 'datetime',
		's40mes' => 'int',
		's40gnoimp' => 'float',
		's40conyuge' => 'float',
		's40hijo' => 'float',
		's40otros' => 'float',
		's40deduccion' => 'float'
	];

	protected $fillable = [
		's40fpv',
		's40mes',
		's40gnoimp',
		's40conyuge',
		's40hijo',
		's40otros',
		's40deduccion'
	];
}
