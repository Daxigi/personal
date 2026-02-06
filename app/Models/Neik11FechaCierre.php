<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik11FechaCierre
 * 
 * @property int $nk11anio
 * @property int $nk11mes
 * @property Carbon|null $nk11fecha_limite
 *
 * @package App\Models
 */
class Neik11FechaCierre extends Model
{
	protected $table = 'neik11_fecha_cierre';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nk11anio' => 'int',
		'nk11mes' => 'int',
		'nk11fecha_limite' => 'datetime'
	];

	protected $fillable = [
		'nk11fecha_limite'
	];
}
