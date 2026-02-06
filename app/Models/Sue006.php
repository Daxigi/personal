<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue006
 * 
 * @property Carbon $s06fpv
 * @property string|null $s06descr
 *
 * @package App\Models
 */
class Sue006 extends Model
{
	protected $table = 'sue006';
	protected $primaryKey = 's06fpv';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's06fpv' => 'datetime'
	];

	protected $fillable = [
		's06descr'
	];
}
