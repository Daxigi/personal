<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue015B
 * 
 * @property int $s15codliq
 * @property int $s15legajo
 * @property int $s15adic
 * @property float|null $s15importe
 *
 * @package App\Models
 */
class Sue015B extends Model
{
	protected $table = 'sue015_b';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's15codliq' => 'int',
		's15legajo' => 'int',
		's15adic' => 'int',
		's15importe' => 'float'
	];

	protected $fillable = [
		's15importe'
	];
}
