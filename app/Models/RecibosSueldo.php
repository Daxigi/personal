<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RecibosSueldo
 * 
 * @property int $id
 * @property int|null $legajo
 * @property int|null $anio
 * @property int|null $mes
 * @property int|null $nliqui
 * @property int|null $tipo
 * @property string|null $nombre_pdf
 * @property string|null $comentarios
 * @property bool|null $activo
 *
 * @package App\Models
 */
class RecibosSueldo extends Model
{
	protected $table = 'recibos_sueldos';
	public $timestamps = false;

	protected $casts = [
		'legajo' => 'int',
		'anio' => 'int',
		'mes' => 'int',
		'nliqui' => 'int',
		'tipo' => 'int',
		'activo' => 'bool'
	];

	protected $fillable = [
		'legajo',
		'anio',
		'mes',
		'nliqui',
		'tipo',
		'nombre_pdf',
		'comentarios',
		'activo'
	];
}
