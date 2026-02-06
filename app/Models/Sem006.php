<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sem006
 * 
 * @property int $codigo
 * @property string|null $juz
 * @property string|null $localidad
 * @property string|null $prov
 * @property string|null $activo
 *
 * @package App\Models
 */
class Sem006 extends Model
{
	protected $table = 'sem006';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $fillable = [
		'juz',
		'localidad',
		'prov',
		'activo'
	];
}
