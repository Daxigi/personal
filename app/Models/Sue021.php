<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue021
 * 
 * @property int $s21legajo
 * @property int $s21anio
 * @property int $s21mes
 * @property int $s21dias
 * @property int $s21presen
 *
 * @package App\Models
 */
class Sue021 extends Model
{
	protected $table = 'sue021';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's21legajo' => 'int',
		's21anio' => 'int',
		's21mes' => 'int',
		's21dias' => 'int',
		's21presen' => 'int'
	];

	protected $fillable = [
		's21dias',
		's21presen'
	];
}
