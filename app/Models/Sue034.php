<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue034
 * 
 * @property int $s34documento
 *
 * @package App\Models
 */
class Sue034 extends Model
{
	protected $table = 'sue034';
	protected $primaryKey = 's34documento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's34documento' => 'int'
	];
}
