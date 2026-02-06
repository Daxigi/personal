<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AsFuncion
 * 
 * @property int $documento
 * @property string|null $funcion
 *
 * @package App\Models
 */
class AsFuncion extends Model
{
	protected $table = 'as_funcion';
	protected $primaryKey = 'documento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'documento' => 'int'
	];

	protected $fillable = [
		'funcion'
	];
}
