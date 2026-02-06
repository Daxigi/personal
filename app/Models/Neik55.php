<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik55
 * 
 * @property int $n05legajo
 * @property int $n05adic
 * @property int $n05correl
 * @property float|null $n05importe
 * @property Carbon $n05feini
 * @property Carbon|null $n05fefin
 * @property string|null $n05valor
 * @property int|null $n05corr_form
 * @property string|null $observaciones
 * 
 * @property Neik01 $neik01
 * @property Sue003 $sue003
 *
 * @package App\Models
 */
class Neik55 extends Model
{
	protected $table = 'neik55';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'n05legajo' => 'int',
		'n05adic' => 'int',
		'n05correl' => 'int',
		'n05importe' => 'float',
		'n05feini' => 'datetime',
		'n05fefin' => 'datetime',
		'n05corr_form' => 'int'
	];

	protected $fillable = [
		'n05importe',
		'n05feini',
		'n05fefin',
		'n05valor',
		'n05corr_form',
		'observaciones'
	];

	public function neik01()
	{
		return $this->belongsTo(Neik01::class, 'n05legajo');
	}

	public function sue003()
	{
		return $this->belongsTo(Sue003::class, 'n05adic');
	}
}
