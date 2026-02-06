<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoDocumentacion
 * 
 * @property int $id_tipo_documentacion
 * @property string|null $descripcion
 * @property string|null $detalle
 * @property bool $activo
 * @property bool $con_archivo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class TipoDocumentacion extends Model
{
	protected $table = 'tipo_documentacion';
	protected $primaryKey = 'id_tipo_documentacion';

	protected $casts = [
		'activo' => 'bool',
		'con_archivo' => 'bool'
	];

	protected $fillable = [
		'descripcion',
		'detalle',
		'activo',
		'con_archivo'
	];
}
