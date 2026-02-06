<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue036
 * 
 * @property int $s36recibo
 * @property int|null $s36codliq
 *
 * @package App\Models
 */
class Sue036 extends Model
{
	protected $table = 'sue036';
	protected $primaryKey = 's36recibo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's36recibo' => 'int',
		's36codliq' => 'int'
	];

	protected $fillable = [
		's36codliq'
	];
}
