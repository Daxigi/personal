<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue020
 * 
 * @property Carbon $s20fpv
 * @property int $s20correl
 * @property float|null $s20imported
 * @property float|null $s20importeh
 * @property float|null $s20valorh
 * @property float|null $s20valorh_disc
 * @property float|null $s20valorp
 * @property float|null $s20matrimonio
 * @property float|null $s20escolaridad
 *
 * @package App\Models
 */
class Sue020 extends Model
{
	protected $table = 'sue020';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's20fpv' => 'datetime',
		's20correl' => 'int',
		's20imported' => 'float',
		's20importeh' => 'float',
		's20valorh' => 'float',
		's20valorh_disc' => 'float',
		's20valorp' => 'float',
		's20matrimonio' => 'float',
		's20escolaridad' => 'float'
	];

	protected $fillable = [
		's20imported',
		's20importeh',
		's20valorh',
		's20valorh_disc',
		's20valorp',
		's20matrimonio',
		's20escolaridad'
	];
}
