<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsDniRechaz
 * 
 * @property int $id
 * @property int|null $documento
 * @property string|null $usuario
 * @property Carbon|null $fecha
 * @property bool|null $suspendido
 * @property bool|null $s_gch
 *
 * @package App\Models
 */
class AsDniRechaz extends Model
{
	protected $table = 'as_dni_rechaz';
	public $timestamps = false;

	protected $casts = [
		'documento' => 'int',
		'fecha' => 'datetime',
		'suspendido' => 'bool',
		's_gch' => 'bool'
	];

	protected $fillable = [
		'documento',
		'usuario',
		'fecha',
		'suspendido',
		's_gch'
	];
}
