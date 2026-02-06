<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AsNroPlanilla
 * 
 * @property int $id_nro
 * @property string|null $secretaria
 * @property string|null $firmante
 * @property string|null $observaciones
 *
 * @package App\Models
 */
class AsNroPlanilla extends Model
{
	protected $table = 'as_nro_planillas';
	protected $primaryKey = 'id_nro';
	public $timestamps = false;

	protected $hidden = [
		'secretaria'
	];

	protected $fillable = [
		'secretaria',
		'firmante',
		'observaciones'
	];
}
