<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Beneficio
 * 
 * @property int $id_bene
 * @property string|null $descripcion_be
 * @property bool $activo
 * @property bool $foto
 * @property int|null $id_nivel
 * @property bool $ver_web
 * @property bool $compra_tarjeta
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Beneficio extends Model
{
	protected $table = 'beneficio';
	protected $primaryKey = 'id_bene';

	protected $casts = [
		'activo' => 'bool',
		'foto' => 'bool',
		'id_nivel' => 'int',
		'ver_web' => 'bool',
		'compra_tarjeta' => 'bool'
	];

	protected $fillable = [
		'descripcion_be',
		'activo',
		'foto',
		'id_nivel',
		'ver_web',
		'compra_tarjeta'
	];
}
