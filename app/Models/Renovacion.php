<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Renovacion
 * 
 * @property int $documento
 * @property string|null $resol
 *
 * @package App\Models
 */
class Renovacion extends Model
{
	protected $table = 'renovacion';
	protected $primaryKey = 'documento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'documento' => 'int'
	];

	protected $fillable = [
		'resol'
	];
}
