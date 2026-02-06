<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AmMedico
 * 
 * @property int $id_medico
 * @property string|null $nombre_medico
 * @property string|null $especialidad
 * @property float|null $matricula
 * @property string|null $observaciones
 *
 * @package App\Models
 */
class AmMedico extends Model
{
	protected $table = 'am_medicos';
	protected $primaryKey = 'id_medico';
	public $timestamps = false;

	protected $casts = [
		'matricula' => 'float'
	];

	protected $fillable = [
		'nombre_medico',
		'especialidad',
		'matricula',
		'observaciones'
	];
}
