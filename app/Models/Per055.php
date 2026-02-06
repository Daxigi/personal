<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per055
 * 
 * @property int $p55agrup
 * @property string|null $p55descr
 * @property string|null $p55usualta
 * @property Carbon|null $p55fealta
 * @property string|null $p55usumod
 * @property Carbon|null $p55femod
 * @property string|null $agrup_l
 * 
 * @property Collection|Per006[] $per006s
 * @property Collection|Per007[] $per007s
 *
 * @package App\Models
 */
class Per055 extends Model
{
	protected $table = 'per055';
	protected $primaryKey = 'p55agrup';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p55agrup' => 'int',
		'p55fealta' => 'datetime',
		'p55femod' => 'datetime'
	];

	protected $fillable = [
		'p55descr',
		'p55usualta',
		'p55fealta',
		'p55usumod',
		'p55femod',
		'agrup_l'
	];

	public function per006s()
	{
		return $this->hasMany(Per006::class, 'p06agrup');
	}

	public function per007s()
	{
		return $this->hasMany(Per007::class, 'p07agrup');
	}
}
