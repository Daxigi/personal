<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsLog
 * 
 * @property Carbon|null $nov_fecha
 * @property Carbon|null $fec_desde
 * @property Carbon|null $fec_hasta
 * @property int $p01legajo
 * @property int|null $p01docum
 * @property string|null $art_id
 * @property string|null $nov_comentario
 * @property int $id_log
 * @property string|null $op_alta
 * @property string|null $fec_hora_alta
 *
 * @package App\Models
 */
class AsLog extends Model
{
	protected $table = 'as_log';
	protected $primaryKey = 'id_log';
	public $timestamps = false;

	protected $casts = [
		'nov_fecha' => 'datetime',
		'fec_desde' => 'datetime',
		'fec_hasta' => 'datetime',
		'p01legajo' => 'int',
		'p01docum' => 'int'
	];

	protected $fillable = [
		'nov_fecha',
		'fec_desde',
		'fec_hasta',
		'p01legajo',
		'p01docum',
		'art_id',
		'nov_comentario',
		'op_alta',
		'fec_hora_alta'
	];
}
