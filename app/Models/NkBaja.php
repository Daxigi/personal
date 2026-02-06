<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NkBaja
 * 
 * @property int $nk3_convalida
 * @property string|null $baja
 * @property string|null $activo
 *
 * @package App\Models
 */
class NkBaja extends Model
{
	protected $table = 'nk_baja';
	protected $primaryKey = 'nk3_convalida';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nk3_convalida' => 'int'
	];

	protected $fillable = [
		'baja',
		'activo'
	];
}
