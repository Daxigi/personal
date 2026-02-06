<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Escala
 * 
 * @property int $nivel
 * @property float|null $basico
 * @property string|null $documento
 *
 * @package App\Models
 */
class Escala extends Model
{
	protected $table = 'escala';
	protected $primaryKey = 'nivel';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nivel' => 'int',
		'basico' => 'float'
	];

	protected $fillable = [
		'basico',
		'documento'
	];
}
