<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Scm001ConcejoActual
 * 
 * @property string|null $depresu_concejo
 * @property string|null $exp_mov_permitido
 *
 * @package App\Models
 */
class Scm001ConcejoActual extends Model
{
	protected $table = 'scm001_concejo_actual';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'depresu_concejo',
		'exp_mov_permitido'
	];
}
