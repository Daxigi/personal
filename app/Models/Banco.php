<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Banco
 * 
 * @property string $codigo
 * @property string|null $detalle
 * @property string|null $activo
 *
 * @package App\Models
 */
class Banco extends Model
{
	protected $table = 'bancos';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'detalle',
		'activo'
	];
}
