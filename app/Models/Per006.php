<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per006
 * 
 * @property Carbon $p06fpv
 * @property int $p06agrup
 * @property int $p06nivel
 * @property float|null $p06basico
 * @property string|null $p06descr
 * @property string|null $p06usualta
 * @property Carbon|null $p06fealta
 * @property string|null $p06usumod
 * @property Carbon|null $p06femod
 * 
 * @property Per057 $per057
 * @property Per055 $per055
 * @property Collection|Per007[] $per007s
 *
 * @package App\Models
 */
class Per006 extends Model
{
	protected $table = 'per006';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p06fpv' => 'datetime',
		'p06agrup' => 'int',
		'p06nivel' => 'int',
		'p06basico' => 'float',
		'p06fealta' => 'datetime',
		'p06femod' => 'datetime'
	];

	protected $fillable = [
		'p06basico',
		'p06descr',
		'p06usualta',
		'p06fealta',
		'p06usumod',
		'p06femod'
	];

	public function per057()
	{
		return $this->belongsTo(Per057::class, 'p06fpv');
	}

	public function per055()
	{
		return $this->belongsTo(Per055::class, 'p06agrup');
	}

	public function per007s()
	{
		return $this->hasMany(Per007::class, 'p07fpv');
	}
}
