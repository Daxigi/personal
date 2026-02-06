<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per008
 * 
 * @property int $p08legajo
 * @property int $p08adicional
 * @property int $p08correl
 * @property Carbon $p08feini
 * @property Carbon|null $p08fefin
 * @property string|null $p08usualta
 * @property Carbon|null $p08fealta
 * @property string|null $p08usumod
 * @property Carbon|null $p08femod
 * 
 * @property Per001 $per001
 * @property Per056 $per056
 *
 * @package App\Models
 */
class Per008 extends Model
{
	protected $table = 'per008';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p08legajo' => 'int',
		'p08adicional' => 'int',
		'p08correl' => 'int',
		'p08feini' => 'datetime',
		'p08fefin' => 'datetime',
		'p08fealta' => 'datetime',
		'p08femod' => 'datetime'
	];

	protected $fillable = [
		'p08feini',
		'p08fefin',
		'p08usualta',
		'p08fealta',
		'p08usumod',
		'p08femod'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'p08legajo');
	}

	public function per056()
	{
		return $this->belongsTo(Per056::class, 'p08adicional');
	}
}
