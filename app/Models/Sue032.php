<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue032
 * 
 * @property int $s32documento
 *
 * @package App\Models
 */
class Sue032 extends Model
{
	protected $table = 'sue032';
	protected $primaryKey = 's32documento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's32documento' => 'int'
	];
}
