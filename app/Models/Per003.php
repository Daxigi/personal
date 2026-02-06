<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per003
 * 
 * @property int $p03id
 * @property int $p03legajo
 * @property int $p03ambito
 * @property string $p03descr
 * @property string $p03empleador
 * @property Carbon $p03feing
 * @property Carbon|null $p03feegr
 * @property string|null $p03coment
 * @property float $p03porcrec
 * @property string|null $p03usualta
 * @property Carbon|null $p03fealta
 * @property string|null $p03usumod
 * @property Carbon|null $p03femod
 * 
 * @property Per001 $per001
 *
 * @package App\Models
 */
class Per003 extends Model
{
	protected $table = 'per003';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p03id' => 'int',
		'p03legajo' => 'int',
		'p03ambito' => 'int',
		'p03feing' => 'datetime',
		'p03feegr' => 'datetime',
		'p03porcrec' => 'float',
		'p03fealta' => 'datetime',
		'p03femod' => 'datetime'
	];

	protected $fillable = [
		'p03ambito',
		'p03descr',
		'p03empleador',
		'p03feing',
		'p03feegr',
		'p03coment',
		'p03porcrec',
		'p03usualta',
		'p03fealta',
		'p03usumod',
		'p03femod'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'p03legajo');
	}
}
