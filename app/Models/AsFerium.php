<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsFerium
 * 
 * @property int $id_feria_legajo
 * @property int $p01legajo
 * @property int|null $id_feria
 * @property string $art_id
 * @property Carbon $fec_desde
 * @property Carbon $fec_hasta
 * @property string|null $autorizante
 * 
 * @property Per001 $per001
 * @property ArticuloFerium|null $articulo_ferium
 * @property AsArticulo $as_articulo
 *
 * @package App\Models
 */
class AsFerium extends Model
{
	protected $table = 'as_feria';
	protected $primaryKey = 'id_feria_legajo';
	public $timestamps = false;

	protected $casts = [
		'p01legajo' => 'int',
		'id_feria' => 'int',
		'fec_desde' => 'datetime',
		'fec_hasta' => 'datetime'
	];

	protected $fillable = [
		'p01legajo',
		'id_feria',
		'art_id',
		'fec_desde',
		'fec_hasta',
		'autorizante'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'p01legajo');
	}

	public function articulo_ferium()
	{
		return $this->belongsTo(ArticuloFerium::class, 'id_feria');
	}

	public function as_articulo()
	{
		return $this->belongsTo(AsArticulo::class, 'art_id');
	}
}
