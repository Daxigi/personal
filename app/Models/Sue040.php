<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue040
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
class Sue040 extends Model
{
	protected $table = 'sue040';
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
		's40gnoimp',
		's40conyuge',
		's40hijo',
		's40otros',
		's40deduccion'
	];
}
