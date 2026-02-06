<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsNovedadesNeike
 * 
 * @property Carbon $nov_fecha
 * @property int $legajo
 * @property int $documento
 * @property string|null $nov_comentario
 * @property int|null $control
 * @property int|null $id_articulo
 * @property string|null $nov_comentario1
 *
 * @package App\Models
 */
class AsNovedadesNeike extends Model
{
	protected $table = 'as_novedades_neike';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nov_fecha' => 'datetime',
		'legajo' => 'int',
		'documento' => 'int',
		'control' => 'int',
		'id_articulo' => 'int'
	];

	protected $fillable = [
		'documento',
		'nov_comentario',
		'control',
		'id_articulo',
		'nov_comentario1'
	];
}
