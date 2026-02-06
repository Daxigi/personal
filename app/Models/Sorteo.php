<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sorteo
 * 
 * @property int $documento
 * @property string|null $apellido_y_nombres
 * @property string|null $domicilio
 * @property Carbon|null $fe_nacimiento
 * @property string|null $genero
 * @property string|null $estado_civil
 * @property int $tipo_liq
 * @property int $agrupamiento
 * @property int $nivel
 * @property string|null $leyenda
 * @property string|null $depresu
 * @property int $orden
 *
 * @package App\Models
 */
class Sorteo extends Model
{
	protected $table = 'sorteo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'documento' => 'int',
		'fe_nacimiento' => 'datetime',
		'tipo_liq' => 'int',
		'agrupamiento' => 'int',
		'nivel' => 'int',
		'orden' => 'int'
	];

	protected $fillable = [
		'documento',
		'apellido_y_nombres',
		'domicilio',
		'fe_nacimiento',
		'genero',
		'estado_civil',
		'tipo_liq',
		'agrupamiento',
		'nivel',
		'leyenda',
		'depresu',
		'orden'
	];
}
