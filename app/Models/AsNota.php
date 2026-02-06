<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsNota
 * 
 * @property int $id_nota
 * @property float|null $dni_nota
 * @property string|null $nombre_nota
 * @property Carbon|null $fecha_nota
 * @property string|null $observaciones_nota
 * @property string|null $firmante_nota
 * @property Carbon|null $fecha_graba
 * @property string|null $tipo
 * @property Carbon|null $fealta
 * @property string|null $usualta
 * @property Carbon|null $femod
 * @property string|null $usumod
 * @property Carbon|null $fec_recibido
 *
 * @package App\Models
 */
class AsNota extends Model
{
	protected $table = 'as_notas';
	protected $primaryKey = 'id_nota';
	public $timestamps = false;

	protected $casts = [
		'dni_nota' => 'float',
		'fecha_nota' => 'datetime',
		'fecha_graba' => 'datetime',
		'fealta' => 'datetime',
		'femod' => 'datetime',
		'fec_recibido' => 'datetime'
	];

	protected $fillable = [
		'dni_nota',
		'nombre_nota',
		'fecha_nota',
		'observaciones_nota',
		'firmante_nota',
		'fecha_graba',
		'tipo',
		'fealta',
		'usualta',
		'femod',
		'usumod',
		'fec_recibido'
	];
}
