<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per063
 * 
 * @property int $p63tipo_egr
 * @property string|null $p63doc_aval
 * @property string $p63descr
 * @property string $p63usualta
 * @property Carbon|null $p63fealta
 * @property string $p63usumod
 * @property Carbon|null $p63femod
 *
 * @package App\Models
 */
class Per063 extends Model
{
	protected $table = 'per063';
	protected $primaryKey = 'p63tipo_egr';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p63tipo_egr' => 'int',
		'p63fealta' => 'datetime',
		'p63femod' => 'datetime'
	];

	protected $fillable = [
		'p63doc_aval',
		'p63descr',
		'p63usualta',
		'p63fealta',
		'p63usumod',
		'p63femod'
	];
}
