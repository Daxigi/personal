<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik99TipoLey
 * 
 * @property int $id_ce
 * @property string|null $descripcion
 * @property bool|null $activo
 * 
 * @property Neik99|null $neik99
 *
 * @package App\Models
 */
class Neik99TipoLey extends Model
{
	protected $table = 'neik99_tipo_ley';
	protected $primaryKey = 'id_ce';
	public $timestamps = false;

	protected $casts = [
		'activo' => 'bool'
	];

	protected $fillable = [
		'descripcion',
		'activo'
	];

	public function neik99()
	{
		return $this->hasOne(Neik99::class, 'id_ce');
	}
}
