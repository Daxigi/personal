<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Suenro
 * 
 * @property float $numero
 *
 * @package App\Models
 */
class Suenro extends Model
{
	protected $table = 'suenros';
	protected $primaryKey = 'numero';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'numero' => 'float'
	];
}
