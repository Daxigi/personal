<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ErroresSql
 * 
 * @property string|null $id_sqlstate
 * @property string|null $descripcion
 *
 * @package App\Models
 */
class ErroresSql extends Model
{
	protected $table = 'errores_sql';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'id_sqlstate',
		'descripcion'
	];
}
