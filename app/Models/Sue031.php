<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue031
 * 
 * @property int $s31codliq
 * @property int $s31documento
 *
 * @package App\Models
 */
class Sue031 extends Model
{
	protected $table = 'sue031';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's31codliq' => 'int',
		's31documento' => 'int'
	];
}
