<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cobertura
 * 
 * @property int $id_cobertura
 * @property int $id_tipo
 * @property string $descripcion
 * @property string|null $domicilio
 * @property string|null $telefonos
 * @property string|null $email
 * @property string|null $contactos
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Cobertura extends Model
{
	protected $table = 'cobertura';
	protected $primaryKey = 'id_cobertura';

	protected $casts = [
		'id_tipo' => 'int'
	];

	protected $fillable = [
		'id_tipo',
		'descripcion',
		'domicilio',
		'telefonos',
		'email',
		'contactos'
	];
}
