<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonasBenefi
 * 
 * @property int $id_per_be
 * @property int|null $id_per
 * @property int|null $id_bene
 * @property string|null $numero_tarjeta
 * @property Carbon|null $fecha_alta
 * @property bool $activo
 * @property Carbon|null $fecha_baja
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class PersonasBenefi extends Model
{
	protected $table = 'personas_benefi';
	protected $primaryKey = 'id_per_be';

	protected $casts = [
		'id_per' => 'int',
		'id_bene' => 'int',
		'fecha_alta' => 'datetime',
		'activo' => 'bool',
		'fecha_baja' => 'datetime'
	];

	protected $fillable = [
		'id_per',
		'id_bene',
		'numero_tarjeta',
		'fecha_alta',
		'activo',
		'fecha_baja'
	];
}
