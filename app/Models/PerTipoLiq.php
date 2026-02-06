<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PerTipoLiq
 * 
 * @property int $tipo_liquidacion
 * @property string $descripcion
 *
 * @package App\Models
 */
class PerTipoLiq extends Model
{
	protected $table = 'per_tipo_liq';
	protected $primaryKey = 'tipo_liquidacion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tipo_liquidacion' => 'int'
	];

	protected $fillable = [
		'descripcion'
	];
}
