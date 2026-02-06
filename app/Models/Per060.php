<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per060
 * 
 * @property string $p60tipo_nov
 * @property string $p60descr
 * @property string $p60usualta
 * @property Carbon|null $p60fealta
 * @property string $p60usumod
 * @property Carbon|null $p60femod
 * 
 * @property Collection|Per009[] $per009s
 *
 * @package App\Models
 */
class Per060 extends Model
{
	protected $table = 'per060';
	protected $primaryKey = 'p60tipo_nov';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p60fealta' => 'datetime',
		'p60femod' => 'datetime'
	];

	protected $fillable = [
		'p60descr',
		'p60usualta',
		'p60fealta',
		'p60usumod',
		'p60femod'
	];

	public function per009s()
	{
		return $this->hasMany(Per009::class, 'p09tipo_nov');
	}
}
