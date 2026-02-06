<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue030
 * 
 * @property int $s30documento
 *
 * @package App\Models
 */
class Sue030 extends Model
{
	protected $table = 'sue030';
	protected $primaryKey = 's30documento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's30documento' => 'int'
	];
}
