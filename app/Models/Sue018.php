<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue018
 * 
 * @property string $s18funcion
 * @property string|null $s18descr
 *
 * @package App\Models
 */
class Sue018 extends Model
{
	protected $table = 'sue018';
	protected $primaryKey = 's18funcion';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		's18descr'
	];
}
