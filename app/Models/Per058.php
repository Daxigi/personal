<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per058
 * 
 * @property Carbon $p58fpv
 * @property int $p58adicional
 * @property string $p58tipval
 * @property float|null $p58valor
 * @property string|null $p58usualta
 * @property Carbon|null $p58fealta
 * @property string|null $p58usumod
 * @property Carbon|null $p58femod
 * 
 * @property Per056 $per056
 *
 * @package App\Models
 */
class Per058 extends Model
{
	protected $table = 'per058';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p58fpv' => 'datetime',
		'p58adicional' => 'int',
		'p58valor' => 'float',
		'p58fealta' => 'datetime',
		'p58femod' => 'datetime'
	];

	protected $fillable = [
		'p58tipval',
		'p58valor',
		'p58usualta',
		'p58fealta',
		'p58usumod',
		'p58femod'
	];

	public function per056()
	{
		return $this->belongsTo(Per056::class, 'p58adicional');
	}
}
