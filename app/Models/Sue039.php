<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue039
 * 
 * @property int $s39codliq
 * @property int $s39dia
 * @property Carbon|null $s39fecha
 * @property string|null $s39lista
 * @property float|null $s39desde
 * @property float|null $s39hasta
 * @property string|null $s39letrad
 * @property string|null $s39letrah
 * 
 * @property Sue012 $sue012
 *
 * @package App\Models
 */
class Sue039 extends Model
{
	protected $table = 'sue039';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's39codliq' => 'int',
		's39dia' => 'int',
		's39fecha' => 'datetime',
		's39desde' => 'float',
		's39hasta' => 'float'
	];

	protected $fillable = [
		's39fecha',
		's39lista',
		's39desde',
		's39hasta',
		's39letrad',
		's39letrah'
	];

	public function sue012()
	{
		return $this->belongsTo(Sue012::class, 's39codliq');
	}
}
