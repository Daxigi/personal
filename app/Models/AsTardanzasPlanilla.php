<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsTardanzasPlanilla
 * 
 * @property int $id_tardaplani
 * @property Carbon $fecha
 * @property int $legajo
 * @property int|null $documento
 * @property int $minutos
 * @property string|null $comentario
 *
 * @package App\Models
 */
class AsTardanzasPlanilla extends Model
{
	protected $table = 'as_tardanzas_planilla';
	protected $primaryKey = 'id_tardaplani';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'legajo' => 'int',
		'documento' => 'int',
		'minutos' => 'int'
	];

	protected $fillable = [
		'fecha',
		'legajo',
		'documento',
		'minutos',
		'comentario'
	];
}
