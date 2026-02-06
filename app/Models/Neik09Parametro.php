<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik09Parametro
 * 
 * @property int $nk9digito
 * @property float|null $nk9minimo
 * @property float|null $nk9osocial
 * @property float|null $nk9cargas
 * @property float|null $nk9estatal
 * @property float|null $nk9osocial_est
 *
 * @package App\Models
 */
class Neik09Parametro extends Model
{
	protected $table = 'neik09_parametros';
	protected $primaryKey = 'nk9digito';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nk9digito' => 'int',
		'nk9minimo' => 'float',
		'nk9osocial' => 'float',
		'nk9cargas' => 'float',
		'nk9estatal' => 'float',
		'nk9osocial_est' => 'float'
	];

	protected $fillable = [
		'nk9minimo',
		'nk9osocial',
		'nk9cargas',
		'nk9estatal',
		'nk9osocial_est'
	];
}
