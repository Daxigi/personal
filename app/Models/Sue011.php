<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue011
 * 
 * @property int $s11tipo_liq
 * @property int $s11adic
 *
 * @package App\Models
 */
class Sue011 extends Model
{
	protected $table = 'sue011';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's11tipo_liq' => 'int',
		's11adic' => 'int'
	];
}
