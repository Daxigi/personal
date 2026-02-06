<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue025
 * 
 * @property Carbon $s25fpv
 * @property int $s25legajo
 * @property int $s25porcen
 * @property string|null $s25documento
 * @property Carbon|null $s25fefin
 *
 * @package App\Models
 */
class Sue025 extends Model
{
	protected $table = 'sue025';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's25fpv' => 'datetime',
		's25legajo' => 'int',
		's25porcen' => 'int',
		's25fefin' => 'datetime'
	];

	protected $fillable = [
		's25porcen',
		's25documento',
		's25fefin'
	];
}
