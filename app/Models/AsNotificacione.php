<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsNotificacione
 * 
 * @property float $id_gestion
 * @property float|null $dni_agente
 * @property string|null $domicilio_reposo
 * @property Carbon|null $fecha_gestion
 * @property Carbon|null $fecha_ausencia
 * @property Carbon|null $fecha_reincorpora
 * @property float|null $dni_familiar
 * @property string|null $nombre_familiar
 * @property string|null $trabajo_declarado
 * @property string|null $causa_ausencia
 * @property string|null $observaciones
 * @property string|null $telefono
 * @property Carbon|null $fealta
 * @property string|null $usualta
 * @property Carbon|null $femod
 * @property string|null $usumod
 * @property string|null $hora
 * @property string|null $dias
 * @property string|null $imag_med
 * @property string|null $sit_rev
 * @property int|null $legajo
 *
 * @package App\Models
 */
class AsNotificacione extends Model
{
	protected $table = 'as_notificaciones';
	protected $primaryKey = 'id_gestion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_gestion' => 'float',
		'dni_agente' => 'float',
		'fecha_gestion' => 'datetime',
		'fecha_ausencia' => 'datetime',
		'fecha_reincorpora' => 'datetime',
		'dni_familiar' => 'float',
		'fealta' => 'datetime',
		'femod' => 'datetime',
		'legajo' => 'int'
	];

	protected $fillable = [
		'dni_agente',
		'domicilio_reposo',
		'fecha_gestion',
		'fecha_ausencia',
		'fecha_reincorpora',
		'dni_familiar',
		'nombre_familiar',
		'trabajo_declarado',
		'causa_ausencia',
		'observaciones',
		'telefono',
		'fealta',
		'usualta',
		'femod',
		'usumod',
		'hora',
		'dias',
		'imag_med',
		'sit_rev',
		'legajo'
	];
}
