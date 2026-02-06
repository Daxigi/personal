<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue015Temp
 * 
 * @property int $s15codliq_t
 * @property int $s15legajo_t
 * @property int $s15adic_t
 * @property float|null $s15importe_t
 *
 * @package App\Models
 */
class Sue015Temp extends Model
{
	protected $table = 'sue015_temp';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's15codliq_t' => 'int',
		's15legajo_t' => 'int',
		's15adic_t' => 'int',
		's15importe_t' => 'float'
	];

	protected $fillable = [
		's15importe_t'
	];
}
