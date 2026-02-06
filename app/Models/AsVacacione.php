<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsVacacione
 * 
 * @property int $legajo
 * @property int $correl
 * @property int $anio
 * @property int $dias_solicitados
 * @property int $dias_otorgados
 * @property Carbon $fe_desde
 * @property Carbon $fe_hasta
 * @property Carbon|null $fe_suspension
 * @property string|null $disposicion
 * @property string|null $firmante
 * @property int|null $dias_dispo
 * 
 * @property Per001 $per001
 *
 * @package App\Models
 */
class AsVacacione extends Model
{
	protected $table = 'as_vacaciones';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'legajo' => 'int',
		'correl' => 'int',
		'anio' => 'int',
		'dias_solicitados' => 'int',
		'dias_otorgados' => 'int',
		'fe_desde' => 'datetime',
		'fe_hasta' => 'datetime',
		'fe_suspension' => 'datetime',
		'dias_dispo' => 'int'
	];

	protected $fillable = [
		'anio',
		'dias_solicitados',
		'dias_otorgados',
		'fe_desde',
		'fe_hasta',
		'fe_suspension',
		'disposicion',
		'firmante',
		'dias_dispo'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'legajo');
	}
}
