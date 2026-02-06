<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik22
 * 
 * @property int $n22documento
 * @property int $n22dias
 * @property int $n22presen
 *
 * @package App\Models
 */
class Neik22 extends Model
{
	protected $table = 'neik22';
	protected $primaryKey = 'n22documento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'n22documento' => 'int',
		'n22dias' => 'int',
		'n22presen' => 'int'
	];

	protected $fillable = [
		'n22dias',
		'n22presen'
	];
}
