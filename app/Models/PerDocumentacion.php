<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PerDocumentacion
 * 
 * @property Carbon|null $fecha
 * @property int $numero
 * @property int $anio
 * @property string $tipo_doc
 * @property int|null $tema_doc
 * @property int|null $subtema_doc
 * @property string|null $extracto
 * @property string|null $observaciones
 * @property bool|null $legajos_com
 * @property bool|null $visualizada
 *
 * @package App\Models
 */
class PerDocumentacion extends Model
{
	protected $table = 'per_documentacion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'numero' => 'int',
		'anio' => 'int',
		'tema_doc' => 'int',
		'subtema_doc' => 'int',
		'legajos_com' => 'bool',
		'visualizada' => 'bool'
	];

	protected $fillable = [
		'fecha',
		'tema_doc',
		'subtema_doc',
		'extracto',
		'observaciones',
		'legajos_com',
		'visualizada'
	];
}
