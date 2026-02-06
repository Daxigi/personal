<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue046
 * 
 * @property int $s46documento
 * @property int $s46correl
 * @property string|null $s46denominacion
 * @property float|null $s46importe
 * @property Carbon|null $s46fedesde
 * @property Carbon|null $s46fehasta
 *
 * @package App\Models
 */
class Sue046 extends Model
{
	protected $table = 'sue046';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's46documento' => 'int',
		's46correl' => 'int',
		's46importe' => 'float',
		's46fedesde' => 'datetime',
		's46fehasta' => 'datetime'
	];

	protected $fillable = [
		's46denominacion',
		's46importe',
		's46fedesde',
		's46fehasta'
	];
}
