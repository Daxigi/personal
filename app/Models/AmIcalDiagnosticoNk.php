<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AmIcalDiagnosticoNk
 * 
 * @property int $nk2legajo
 * @property int $nk2docum
 * @property int $amdd_id
 * @property Carbon $amdd_fecha_emision
 * @property Carbon|null $amdd_fecha_presentacion
 * @property Carbon $amdd_fecha_vencimiento
 * @property string|null $amdd_diagnostico
 * @property string|null $amdd_medico
 * @property string|null $amdd_comentarios
 * @property int|null $id_patologia
 * 
 * @property Neik02 $neik02
 *
 * @package App\Models
 */
class AmIcalDiagnosticoNk extends Model
{
	protected $table = 'am_ical_diagnostico_nk';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nk2legajo' => 'int',
		'nk2docum' => 'int',
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

	public function neik02()
	{
		return $this->belongsTo(Neik02::class, 'nk2legajo')
					->where('neik02.nk2legajo', '=', 'am_ical_diagnostico_nk.nk2legajo')
					->where('neik02.nk2docum', '=', 'am_ical_diagnostico_nk.nk2legajo')
					->where('neik02.nk2legajo', '=', 'am_ical_diagnostico_nk.nk2docum')
					->where('neik02.nk2docum', '=', 'am_ical_diagnostico_nk.nk2docum');
	}
}
