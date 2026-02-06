<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsOrdEstado
 * 
 * @property int $id_estado
 * @property string $descripcion
 * @property string $mod_prog
 * 
 * @property Collection|AsArticulo[] $as_articulos
 *
 * @package App\Models
 */
class AsOrdEstado extends Model
{
	protected $table = 'as_ord_estados';
	protected $primaryKey = 'id_estado';
	public $timestamps = false;

	protected $fillable = [
		'descripcion',
		'mod_prog'
	];

	public function as_articulos()
	{
		return $this->hasMany(AsArticulo::class, 'id_estado');
	}
}
