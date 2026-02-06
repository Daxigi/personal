<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resultado1
 * 
 * @property float|null $id
 *
 * @package App\Models
 */
class Resultado1 extends Model
{
	protected $table = 'resultado1';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'float'
	];

	protected $fillable = [
		'id'
	];
}
