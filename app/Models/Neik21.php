<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik21
 * 
 * @property int $n21legajo
 * @property int $n21anio
 * @property int $n21mes
 * @property int $n21dias
 * @property int $n21presen
 *
 * @package App\Models
 */
class Neik21 extends Model
{
	protected $table = 'neik21';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'n21legajo' => 'int',
		'n21anio' => 'int',
		'n21mes' => 'int',
		'n21dias' => 'int',
		'n21presen' => 'int'
	];

	protected $fillable = [
		'n21dias',
		'n21presen'
	];
}
