<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue045
 * 
 * @property Carbon $s45fpv
 * @property int $s45adic
 * @property string|null $s45descr
 * @property float|null $s45importe
 * 
 * @property Sue003 $sue003
 *
 * @package App\Models
 */
class Sue045 extends Model
{
	protected $table = 'sue045';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's45fpv' => 'datetime',
		's45adic' => 'int',
		's45importe' => 'float'
	];

	protected $fillable = [
		's45descr',
		's45importe'
	];

	public function sue003()
	{
		return $this->belongsTo(Sue003::class, 's45adic');
	}
}
