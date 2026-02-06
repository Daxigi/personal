<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsNovPlanilla
 * 
 * @property int $id_nov
 * @property float|null $documento
 * @property string|null $mes_anio
 * @property string|null $sit_revista
 * @property string|null $gch_descr_corta
 * @property string|null $c01leyen
 * @property int|null $nro_planilla
 * @property string|null $secretaria
 * @property string|null $depen
 * @property Carbon|null $fe_recibido
 * @property Carbon|null $fe_grab
 * @property string|null $observaciones
 * @property string|null $firmante
 *
 * @package App\Models
 */
class AsNovPlanilla extends Model
{
	protected $table = 'as_nov_planillas';
	protected $primaryKey = 'id_nov';
	public $timestamps = false;

	protected $casts = [
		'documento' => 'float',
		'nro_planilla' => 'int',
		'fe_recibido' => 'datetime',
		'fe_grab' => 'datetime'
	];

	protected $hidden = [
		'secretaria'
	];

	protected $fillable = [
		'documento',
		'mes_anio',
		'sit_revista',
		'gch_descr_corta',
		'c01leyen',
		'nro_planilla',
		'secretaria',
		'depen',
		'fe_recibido',
		'fe_grab',
		'observaciones',
		'firmante'
	];
}
