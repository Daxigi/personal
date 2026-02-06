<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tabla1
 * 
 * @property int|null $s17adic
 * @property int|null $s17correl
 * @property int|null $s17grupo
 * @property int|null $s17niveld
 * @property int|null $s17nivelh
 * @property string|null $s17formula
 *
 * @package App\Models
 */
class Tabla1 extends Model
{
	protected $table = 'tabla1';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's17adic' => 'int',
		's17correl' => 'int',
		's17grupo' => 'int',
		's17niveld' => 'int',
		's17nivelh' => 'int'
	];

	protected $fillable = [
		's17adic',
		's17correl',
		's17grupo',
		's17niveld',
		's17nivelh',
		's17formula'
	];
}
