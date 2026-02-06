<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsNormasAreasUso
 * 
 * @property string $cod_area
 * @property string $descr_area
 * 
 * @property Collection|AsOrdenanza[] $as_ordenanzas
 *
 * @package App\Models
 */
class AsNormasAreasUso extends Model
{
	protected $table = 'as_normas_areas_uso';
	protected $primaryKey = 'cod_area';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'descr_area'
	];

	public function as_ordenanzas()
	{
		return $this->hasMany(AsOrdenanza::class, 'cod_area');
	}
}
