<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CargaInstitucion
 * 
 * @property int $id_carga_institucion
 * @property string|null $descripcion
 * @property Carbon|null $fecha_desde
 * @property Carbon|null $fecha_hasta
 * @property int|null $anio_cursado
 * @property bool $activo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CargaInstitucion extends Model
{
	protected $table = 'carga_institucion';
	protected $primaryKey = 'id_carga_institucion';

	protected $casts = [
		'fecha_desde' => 'datetime',
		'fecha_hasta' => 'datetime',
		'anio_cursado' => 'int',
		'activo' => 'bool'
	];

	protected $fillable = [
		'descripcion',
		'fecha_desde',
		'fecha_hasta',
		'anio_cursado',
		'activo'
	];
}
