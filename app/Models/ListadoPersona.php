<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ListadoPersona
 * 
 * @property int|null $documento
 * @property string|null $apyn
 * @property int|null $sit_rev
 * @property Carbon|null $feingreso
 * @property string|null $secretaria
 * @property string|null $dependencia
 *
 * @package App\Models
 */
class ListadoPersona extends Model
{
	protected $table = 'listado_personas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'documento' => 'int',
		'sit_rev' => 'int',
		'feingreso' => 'datetime'
	];

	protected $hidden = [
		'secretaria'
	];

	protected $fillable = [
		'documento',
		'apyn',
		'sit_rev',
		'feingreso',
		'secretaria',
		'dependencia'
	];
}
