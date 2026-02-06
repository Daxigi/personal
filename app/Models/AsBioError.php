<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsBioError
 * 
 * @property int $id_log
 * @property Carbon|null $fecha_log
 * @property int|null $documento
 * @property int|null $id_biometrico
 * @property Carbon|null $fecha_registro
 * @property string|null $hora_registro
 * @property string|null $tipo_bio
 *
 * @package App\Models
 */
class AsBioError extends Model
{
	protected $table = 'as_bio_error';
	protected $primaryKey = 'id_log';
	public $timestamps = false;

	protected $casts = [
		'fecha_log' => 'datetime',
		'documento' => 'int',
		'id_biometrico' => 'int',
		'fecha_registro' => 'datetime'
	];

	protected $fillable = [
		'fecha_log',
		'documento',
		'id_biometrico',
		'fecha_registro',
		'hora_registro',
		'tipo_bio'
	];
}
