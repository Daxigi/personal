<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Borrar
 * 
 * @property string|null $proyecto
 * @property string|null $perfil
 * @property string|null $usuario
 * @property string|null $ayn
 * @property float|null $dni
 *
 * @package App\Models
 */
class Borrar extends Model
{
	protected $table = 'borrar';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dni' => 'float'
	];

	protected $fillable = [
		'proyecto',
		'perfil',
		'usuario',
		'ayn',
		'dni'
	];
}
