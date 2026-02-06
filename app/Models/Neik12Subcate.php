<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik12Subcate
 * 
 * @property int $id_subcate
 * @property string|null $descripcion
 * @property bool|null $activo
 *
 * @package App\Models
 */
class Neik12Subcate extends Model
{
	protected $table = 'neik12_subcate';
	protected $primaryKey = 'id_subcate';
	public $timestamps = false;

	protected $casts = [
		'activo' => 'bool'
	];

	protected $fillable = [
		'descripcion',
		'activo'
	];
}
