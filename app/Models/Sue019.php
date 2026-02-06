<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue019
 * 
 * @property Carbon $s19fpv
 * @property string|null $s19descr
 * @property float|null $s19importe
 *
 * @package App\Models
 */
class Sue019 extends Model
{
	protected $table = 'sue019';
	protected $primaryKey = 's19fpv';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's19fpv' => 'datetime',
		's19importe' => 'float'
	];

	protected $fillable = [
		's19descr',
		's19importe'
	];
}
