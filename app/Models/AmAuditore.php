<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AmAuditore
 * 
 * @property int $id_audi
 * @property float|null $dni_audi
 * @property string|null $nombre_audi
 * @property string|null $especialidad_audi
 * @property float|null $matricula_audi
 * @property string|null $observaciones
 *
 * @package App\Models
 */
class AmAuditore extends Model
{
	protected $table = 'am_auditores';
	protected $primaryKey = 'id_audi';
	public $timestamps = false;

	protected $casts = [
		'dni_audi' => 'float',
		'matricula_audi' => 'float'
	];

	protected $fillable = [
		'dni_audi',
		'nombre_audi',
		'especialidad_audi',
		'matricula_audi',
		'observaciones'
	];
}
