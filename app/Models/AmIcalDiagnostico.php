<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AmIcalDiagnostico
 * 
 * @property int $p04legajo
 * @property int $p04docum
 * @property int $amdd_id
 * @property Carbon $amdd_fecha_emision
 * @property Carbon|null $amdd_fecha_presentacion
 * @property Carbon $amdd_fecha_vencimiento
 * @property string|null $amdd_diagnostico
 * @property string|null $amdd_medico
 * @property string|null $amdd_comentarios
 * @property int|null $id_patologia
 * 
 * @property Per004 $per004
 *
 * @package App\Models
 */
class AmIcalDiagnostico extends Model
{
	protected $table = 'am_ical_diagnostico';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p04legajo' => 'int',
		'p04docum' => 'int',
		'amdd_id' => 'int',
		'amdd_fecha_emision' => 'datetime',
		'amdd_fecha_presentacion' => 'datetime',
		'amdd_fecha_vencimiento' => 'datetime',
		'id_patologia' => 'int'
	];

	protected $fillable = [
		'amdd_fecha_emision',
		'amdd_fecha_presentacion',
		'amdd_fecha_vencimiento',
		'amdd_diagnostico',
		'amdd_medico',
		'amdd_comentarios',
		'id_patologia'
	];

	public function per004()
	{
		return $this->belongsTo(Per004::class, 'p04legajo')
					->where('per004.p04legajo', '=', 'am_ical_diagnostico.p04legajo')
					->where('per004.p04docum', '=', 'am_ical_diagnostico.p04legajo')
					->where('per004.p04legajo', '=', 'am_ical_diagnostico.p04docum')
					->where('per004.p04docum', '=', 'am_ical_diagnostico.p04docum');
	}
}
