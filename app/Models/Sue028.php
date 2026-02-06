<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue028
 * 
 * @property Carbon $s28fpv
 * @property int $s28legajo
 * @property int $s28porcen
 * @property string|null $s28documento
 * @property Carbon|null $s28fefin
 *
 * @package App\Models
 */
class Sue028 extends Model
{
	protected $table = 'sue028';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's28fpv' => 'datetime',
		's28legajo' => 'int',
		's28porcen' => 'int',
		's28fefin' => 'datetime'
	];

	protected $fillable = [
		's28porcen',
		's28documento',
		's28fefin'
	];
}
