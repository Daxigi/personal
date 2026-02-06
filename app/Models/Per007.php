<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per007
 * 
 * @property Carbon $p07fpv
 * @property int $p07agrup
 * @property int $p07nivel
 * @property int $p07adicional
 * @property string|null $p07tipval
 * @property float|null $p07valor
 * @property string|null $p07usualta
 * @property Carbon|null $p07fealta
 * @property string|null $p07usumod
 * @property Carbon|null $p07femod
 * @property Carbon|null $p07feini
 * @property Carbon|null $p07fefin
 * 
 * @property Per057 $per057
 * @property Per006 $per006
 * @property Per055 $per055
 * @property Per056 $per056
 *
 * @package App\Models
 */
class Per007 extends Model
{
	protected $table = 'per007';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p07fpv' => 'datetime',
		'p07agrup' => 'int',
		'p07nivel' => 'int',
		'p07adicional' => 'int',
		'p07valor' => 'float',
		'p07fealta' => 'datetime',
		'p07femod' => 'datetime',
		'p07feini' => 'datetime',
		'p07fefin' => 'datetime'
	];

	protected $fillable = [
		'p07tipval',
		'p07valor',
		'p07usualta',
		'p07fealta',
		'p07usumod',
		'p07femod',
		'p07feini',
		'p07fefin'
	];

	public function per057()
	{
		return $this->belongsTo(Per057::class, 'p07fpv');
	}

	public function per006()
	{
		return $this->belongsTo(Per006::class, 'p07fpv')
					->where('per006.p06fpv', '=', 'per007.p07fpv')
					->where('per006.p06agrup', '=', 'per007.p07fpv')
					->where('per006.p06nivel', '=', 'per007.p07fpv')
					->where('per006.p06nivel', '=', 'per007.p07agrup')
					->where('per006.p06fpv', '=', 'per007.p07agrup')
					->where('per006.p06agrup', '=', 'per007.p07agrup')
					->where('per006.p06fpv', '=', 'per007.p07nivel')
					->where('per006.p06agrup', '=', 'per007.p07nivel')
					->where('per006.p06nivel', '=', 'per007.p07nivel');
	}

	public function per055()
	{
		return $this->belongsTo(Per055::class, 'p07agrup');
	}

	public function per056()
	{
		return $this->belongsTo(Per056::class, 'p07adicional');
	}
}
