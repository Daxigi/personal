<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsTardanzasTj
 * 
 * @property int $id_tardanza
 * @property Carbon $fecha
 * @property int $legajo
 * @property int $minutos
 * @property string|null $comentario
 *
 * @package App\Models
 */
class AsTardanzasTj extends Model
{
	protected $table = 'as_tardanzas_tj';
	protected $primaryKey = 'id_tardanza';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'legajo' => 'int',
		'minutos' => 'int'
	];

	protected $fillable = [
		'fecha',
		'legajo',
		'minutos',
		'comentario'
	];
}
