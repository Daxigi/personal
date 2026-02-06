<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Per054
 * 
 * @property int $p54relacion
 * @property string $p54descr
 *
 * @package App\Models
 */
class Per054 extends Model
{
	protected $table = 'per054';
	protected $primaryKey = 'p54relacion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p54relacion' => 'int'
	];

	protected $fillable = [
		'p54descr'
	];
}
