<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsOrdenanza
 * 
 * @property string $ord_id
 * @property int $ord_nro
 * @property int $ord_anio
 * @property string $ord_asunto
 * @property string|null $ord_tipo
 * @property string|null $nombre_imagen
 * @property string|null $etiquetas
 * @property string|null $cod_area
 * 
 * @property AsNormasAreasUso|null $as_normas_areas_uso
 * @property Collection|AsArticulo[] $as_articulos
 *
 * @package App\Models
 */
class AsOrdenanza extends Model
{
	protected $table = 'as_ordenanzas';
	protected $primaryKey = 'ord_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ord_nro' => 'int',
		'ord_anio' => 'int'
	];

	protected $fillable = [
		'ord_nro',
		'ord_anio',
		'ord_asunto',
		'ord_tipo',
		'nombre_imagen',
		'etiquetas',
		'cod_area'
	];

	public function as_normas_areas_uso()
	{
		return $this->belongsTo(AsNormasAreasUso::class, 'cod_area');
	}

	public function as_articulos()
	{
		return $this->hasMany(AsArticulo::class, 'ord_id');
	}
}
