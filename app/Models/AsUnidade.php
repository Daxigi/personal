<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AsUnidade
 * 
 * @property int $id_unidad
 * @property string|null $descripcion
 * @property string|null $usu_generico
 * @property string|null $domicilio
 *
 * @package App\Models
 */
class AsUnidade extends Model
{
	protected $table = 'as_unidades';
	protected $primaryKey = 'id_unidad';
	public $timestamps = false;

	protected $fillable = [
		'descripcion',
		'usu_generico',
		'domicilio'
	];
}
