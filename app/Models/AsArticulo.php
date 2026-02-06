<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsArticulo
 * 
 * @property string $art_id
 * @property string $ord_id
 * @property int $art_nro
 * @property string|null $art_inc
 * @property string $art_descr
 * @property string|null $art_areas
 * @property string|null $art_tipo_cert
 * @property int|null $art_pres
 * @property int|null $id_estado
 * @property string|null $cod
 * 
 * @property AsOrdenanza $as_ordenanza
 * @property AsOrdEstado|null $as_ord_estado
 * @property Collection|AsNovedade[] $as_novedades
 * @property Collection|ArticuloFerium[] $articulo_feria
 * @property Collection|AmCertificado[] $am_certificados
 * @property Collection|AsFerium[] $as_feria
 *
 * @package App\Models
 */
class AsArticulo extends Model
{
	protected $table = 'as_articulos';
	protected $primaryKey = 'art_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'art_nro' => 'int',
		'art_pres' => 'int',
		'id_estado' => 'int'
	];

	protected $fillable = [
		'ord_id',
		'art_nro',
		'art_inc',
		'art_descr',
		'art_areas',
		'art_tipo_cert',
		'art_pres',
		'id_estado',
		'cod'
	];

	public function as_ordenanza()
	{
		return $this->belongsTo(AsOrdenanza::class, 'ord_id');
	}

	public function as_ord_estado()
	{
		return $this->belongsTo(AsOrdEstado::class, 'id_estado');
	}

	public function as_novedades()
	{
		return $this->hasMany(AsNovedade::class, 'art_id');
	}

	public function articulo_feria()
	{
		return $this->hasMany(ArticuloFerium::class, 'art_id');
	}

	public function am_certificados()
	{
		return $this->hasMany(AmCertificado::class, 'art_id');
	}

	public function as_feria()
	{
		return $this->hasMany(AsFerium::class, 'art_id');
	}
}
