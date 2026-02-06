<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Per070
 * 
 * @property int $id_carrera
 * @property string|null $cnombre
 * @property string|null $activo
 * @property string|null $carrera
 *
 * @package App\Models
 */
class Per070 extends Model
{
	protected $table = 'per070';
	protected $primaryKey = 'id_carrera';
	public $timestamps = false;

	protected $fillable = [
		'cnombre',
		'activo',
		'carrera'
	];
}
