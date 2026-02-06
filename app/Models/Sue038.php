<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue038
 * 
 * @property Carbon $s38fpv
 * @property int $s38nivel
 * @property float|null $s38coef
 *
 * @package App\Models
 */
class Sue038 extends Model
{
	protected $table = 'sue038';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's38fpv' => 'datetime',
		's38nivel' => 'int',
		's38coef' => 'float'
	];

	protected $fillable = [
		's38coef'
	];
}
