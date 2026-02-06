<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AsBiometrico
 * 
 * @property float $cod_biometrico
 * @property string|null $desc_corta
 * @property string|null $descripcion
 * @property string|null $ubicación
 *
 * @package App\Models
 */
class AsBiometrico extends Model
{
	protected $table = 'as_biometrico';
	protected $primaryKey = 'cod_biometrico';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cod_biometrico' => 'float'
	];

	protected $fillable = [
		'desc_corta',
		'descripcion',
		'ubicación'
	];
}
