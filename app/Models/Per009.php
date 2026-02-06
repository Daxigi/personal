<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per009
 * 
 * @property int $p09legajo
 * @property int $p09corr
 * @property string $p09tipo_nov
 * @property Carbon|null $p09fenov
 * @property string|null $p09tipo_doc
 * @property string|null $p09id_doc
 * @property string|null $p09obs
 * @property string|null $p09estado
 * @property string|null $p09resto_reg
 * @property string $p09usualta
 * @property Carbon|null $p09fealta
 * @property string $p09usumod
 * @property Carbon|null $p09femod
 * 
 * @property Per001 $per001
 * @property Per060 $per060
 *
 * @package App\Models
 */
class Per009 extends Model
{
	protected $table = 'per009';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p09legajo' => 'int',
		'p09corr' => 'int',
		'p09fenov' => 'datetime',
		'p09fealta' => 'datetime',
		'p09femod' => 'datetime'
	];

	protected $fillable = [
		'p09tipo_nov',
		'p09fenov',
		'p09tipo_doc',
		'p09id_doc',
		'p09obs',
		'p09estado',
		'p09resto_reg',
		'p09usualta',
		'p09fealta',
		'p09usumod',
		'p09femod'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'p09legajo');
	}

	public function per060()
	{
		return $this->belongsTo(Per060::class, 'p09tipo_nov');
	}
}
