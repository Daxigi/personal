<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Scm001CmpActual
 * 
 * @property string|null $depresu_cmp
 * @property string|null $exp_mov_permitido
 *
 * @package App\Models
 */
class Scm001CmpActual extends Model
{
	protected $table = 'scm001_cmp_actual';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'depresu_cmp',
		'exp_mov_permitido'
	];
}
