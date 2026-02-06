<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue004
 * 
 * @property Carbon $s04fpv
 * @property int $s04agrup
 * @property int $s04nivel
 * @property int $s04adicional
 * @property string|null $s04tipovalor
 * @property float|null $s04valor
 * 
 * @property Sue001 $sue001
 *
 * @package App\Models
 */
class Sue004 extends Model
{
	protected $table = 'sue004';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's04fpv' => 'datetime',
		's04agrup' => 'int',
		's04nivel' => 'int',
		's04adicional' => 'int',
		's04valor' => 'float'
	];

	protected $fillable = [
		's04tipovalor',
		's04valor'
	];

	public function sue001()
	{
		return $this->belongsTo(Sue001::class, 's04fpv')
					->where('sue001.s01fpv', '=', 'sue004.s04fpv')
					->where('sue001.s01agrup', '=', 'sue004.s04fpv')
					->where('sue001.s01nivel', '=', 'sue004.s04fpv')
					->where('sue001.s01agrup', '=', 'sue004.s04agrup')
					->where('sue001.s01nivel', '=', 'sue004.s04agrup')
					->where('sue001.s01fpv', '=', 'sue004.s04agrup')
					->where('sue001.s01fpv', '=', 'sue004.s04nivel')
					->where('sue001.s01agrup', '=', 'sue004.s04nivel')
					->where('sue001.s01nivel', '=', 'sue004.s04nivel');
	}
}
