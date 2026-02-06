<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AsTempContinuo
 * 
 * @property int|null $legajo
 *
 * @package App\Models
 */
class AsTempContinuo extends Model
{
	protected $table = 'as_temp_continuos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'legajo' => 'int'
	];

	protected $fillable = [
		'legajo'
	];
}
