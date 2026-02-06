<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsNovedade
 * 
 * @property Carbon $nov_fecha
 * @property int $p01legajo
 * @property int $p01tipodoc
 * @property int $p01docum
 * @property string|null $art_id
 * @property string|null $nov_comentario
 * @property int|null $control
 * 
 * @property Per001 $per001
 * @property AsArticulo|null $as_articulo
 *
 * @package App\Models
 */
class AsNovedade extends Model
{
	protected $table = 'as_novedades';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nov_fecha' => 'datetime',
		'p01legajo' => 'int',
		'p01tipodoc' => 'int',
		'p01docum' => 'int',
		'control' => 'int'
	];

	protected $fillable = [
		'p01tipodoc',
		'p01docum',
		'art_id',
		'nov_comentario',
		'control'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'p01legajo');
	}

	public function as_articulo()
	{
		return $this->belongsTo(AsArticulo::class, 'art_id');
	}
}
