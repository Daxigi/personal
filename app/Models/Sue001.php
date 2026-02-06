<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue001
 * 
 * @property Carbon $s01fpv
 * @property int $s01agrup
 * @property int $s01nivel
 * @property float|null $s01basico
 * @property string|null $s01descr
 * @property string|null $s01letra
 * 
 * @property Collection|Sue004[] $sue004s
 *
 * @package App\Models
 */
class Sue001 extends Model
{
	protected $table = 'sue001';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's01fpv' => 'datetime',
		's01agrup' => 'int',
		's01nivel' => 'int',
		's01basico' => 'float'
	];

	protected $fillable = [
		's01basico',
		's01descr',
		's01letra'
	];

	public function sue004s()
	{
		return $this->hasMany(Sue004::class, 's04fpv');
	}
}
