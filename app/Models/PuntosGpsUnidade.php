<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PuntosGpsUnidade
 * 
 * @property int $id_dispositivo
 * @property string|null $patente
 * @property string|null $modelo
 * @property int|null $estado
 * @property float|null $latitud
 * @property float|null $longitud
 * @property string|null $descripcion
 * @property string|null $marca
 * @property Carbon|null $fecha
 * @property int|null $velocidad
 * @property string|null $grupo
 * @property string|null $usuario
 *
 * @package App\Models
 */
class PuntosGpsUnidade extends Model
{
	protected $table = 'puntos_gps_unidades';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_dispositivo' => 'int',
		'estado' => 'int',
		'latitud' => 'float',
		'longitud' => 'float',
		'fecha' => 'datetime',
		'velocidad' => 'int'
	];

	protected $fillable = [
		'id_dispositivo',
		'patente',
		'modelo',
		'estado',
		'latitud',
		'longitud',
		'descripcion',
		'marca',
		'fecha',
		'velocidad',
		'grupo',
		'usuario'
	];
}
