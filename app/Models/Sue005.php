<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue005
 * 
 * @property int $s05legajo
 * @property int $s05adic
 * @property int $s05correl
 * @property float|null $s05importe
 * @property Carbon $s05feini
 * @property Carbon|null $s05fefin
 * @property string|null $s05valor
 * @property int|null $s05corr_form
 * @property string|null $observaciones
 * 
 * @property Per001 $per001
 * @property Sue003 $sue003
 *
 * @package App\Models
 */
class Sue005 extends Model
{
	protected $table = 'sue005';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's05legajo' => 'int',
		's05adic' => 'int',
		's05correl' => 'int',
		's05importe' => 'float',
		's05feini' => 'datetime',
		's05fefin' => 'datetime',
		's05corr_form' => 'int'
	];

	protected $fillable = [
		's05importe',
		's05feini',
		's05fefin',
		's05valor',
		's05corr_form',
		'observaciones'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 's05legajo');
	}

	public function sue003()
	{
		return $this->belongsTo(Sue003::class, 's05adic');
	}
}
