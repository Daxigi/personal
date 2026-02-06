<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per057
 * 
 * @property Carbon $p57fpv
 * @property string|null $p57descr
 * @property string|null $p57usualta
 * @property Carbon|null $p57fealta
 * @property string|null $p57usumod
 * @property Carbon|null $p57femod
 * 
 * @property Collection|Per006[] $per006s
 * @property Collection|Per007[] $per007s
 *
 * @package App\Models
 */
class Per057 extends Model
{
	protected $table = 'per057';
	protected $primaryKey = 'p57fpv';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p57fpv' => 'datetime',
		'p57fealta' => 'datetime',
		'p57femod' => 'datetime'
	];

	protected $fillable = [
		'p57descr',
		'p57usualta',
		'p57fealta',
		'p57usumod',
		'p57femod'
	];

	public function per006s()
	{
		return $this->hasMany(Per006::class, 'p06fpv');
	}

	public function per007s()
	{
		return $this->hasMany(Per007::class, 'p07fpv');
	}
}
