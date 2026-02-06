<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticuloFerium
 * 
 * @property int $id_feria
 * @property string $art_id
 * @property Carbon $fec_desde
 * @property Carbon $fec_hasta
 * @property Carbon $fec_vigencia
 * @property string|null $descripcion
 * @property string $comentario
 * @property int|null $estado
 * @property string|null $depend
 * 
 * @property AsArticulo $as_articulo
 * @property Collection|AsFerium[] $as_feria
 *
 * @package App\Models
 */
class ArticuloFerium extends Model
{
	protected $table = 'articulo_feria';
	protected $primaryKey = 'id_feria';
	public $timestamps = false;

	protected $casts = [
		'fec_desde' => 'datetime',
		'fec_hasta' => 'datetime',
		'fec_vigencia' => 'datetime',
		'estado' => 'int'
	];

	protected $fillable = [
		'art_id',
		'fec_desde',
		'fec_hasta',
		'fec_vigencia',
		'descripcion',
		'comentario',
		'estado',
		'depend'
	];

	public function as_articulo()
	{
		return $this->belongsTo(AsArticulo::class, 'art_id');
	}

	public function as_feria()
	{
		return $this->hasMany(AsFerium::class, 'id_feria');
	}
}
