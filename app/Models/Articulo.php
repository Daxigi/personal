<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Articulo
 * 
 * @property int $id_articulo
 * @property int $legajo
 * @property Carbon $fe_desde
 * @property Carbon $fe_hasta
 * @property string|null $autorizante
 * @property string|null $art_id
 * @property int|null $id_nota
 * 
 * @property Per001 $per001
 *
 * @package App\Models
 */
class Articulo extends Model
{
	protected $table = 'articulos';
	protected $primaryKey = 'id_articulo';
	public $timestamps = false;

	protected $casts = [
		'legajo' => 'int',
		'fe_desde' => 'datetime',
		'fe_hasta' => 'datetime',
		'id_nota' => 'int'
	];

	protected $fillable = [
		'legajo',
		'fe_desde',
		'fe_hasta',
		'autorizante',
		'art_id',
		'id_nota'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'legajo');
	}
}
