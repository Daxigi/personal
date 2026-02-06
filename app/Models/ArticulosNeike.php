<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticulosNeike
 * 
 * @property int $id_articulo
 * @property int $legajo
 * @property Carbon $fe_desde
 * @property Carbon $fe_hasta
 * @property string|null $autorizante
 * @property string|null $obs
 * @property int|null $id_nota
 *
 * @package App\Models
 */
class ArticulosNeike extends Model
{
	protected $table = 'articulos_neike';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_articulo' => 'int',
		'legajo' => 'int',
		'fe_desde' => 'datetime',
		'fe_hasta' => 'datetime',
		'id_nota' => 'int'
	];

	protected $fillable = [
		'id_articulo',
		'legajo',
		'fe_desde',
		'fe_hasta',
		'autorizante',
		'obs',
		'id_nota'
	];
}
