<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AmActum
 * 
 * @property int $acm_acta
 * @property Carbon|null $acm_fecha
 * @property int|null $acm_legajo
 * @property int|null $acm_documento
 * @property string|null $acm_apyn
 * @property string|null $acm_leyenda
 * @property string|null $acm_n_heredera
 * @property string|null $acm_c01leyen
 * @property string|null $acm_subse
 * @property string|null $acm_secre
 * @property string|null $acm_funcion_actual
 * @property string|null $acm_formacion
 * @property string|null $acm_patalogia
 * @property string|null $acm_patalogia_otras
 * @property bool|null $acm_lic_larga_duracion
 * @property bool|null $acm_lic_medica_comun
 * @property Carbon $fecha_desde
 * @property Carbon $fecha_hasta
 * @property string|null $acm_obs
 * @property string|null $acm_medico_tratante
 * @property string|null $acm_conclusiones
 * @property Carbon $fecha_alta_medica
 * @property Carbon $fecha_retorno_lab
 * @property string|null $acm_cambio_funcion
 * @property string|null $acm_tareas_no
 * @property bool|null $acm_ate_publico
 * @property bool|null $acm_admi_conpc
 * @property bool|null $acm_admi_sinpc
 * @property bool|null $acm_oper_calif
 * @property bool|null $acm_oper_nocalif
 * @property string|null $acm_descr_tarea
 * @property int|null $estado
 * @property Carbon|null $fealta
 * @property string|null $usualta
 * @property Carbon|null $femod
 * @property string|null $usumod
 * @property string|null $prof1
 * @property string|null $prof2
 * @property string|null $prof3
 * @property Carbon|null $acm_fecha_graba
 *
 * @package App\Models
 */
class AmActum extends Model
{
	protected $table = 'am_acta';
	protected $primaryKey = 'acm_acta';
	public $timestamps = false;

	protected $casts = [
		'acm_fecha' => 'datetime',
		'acm_legajo' => 'int',
		'acm_documento' => 'int',
		'acm_lic_larga_duracion' => 'bool',
		'acm_lic_medica_comun' => 'bool',
		'fecha_desde' => 'datetime',
		'fecha_hasta' => 'datetime',
		'fecha_alta_medica' => 'datetime',
		'fecha_retorno_lab' => 'datetime',
		'acm_ate_publico' => 'bool',
		'acm_admi_conpc' => 'bool',
		'acm_admi_sinpc' => 'bool',
		'acm_oper_calif' => 'bool',
		'acm_oper_nocalif' => 'bool',
		'estado' => 'int',
		'fealta' => 'datetime',
		'femod' => 'datetime',
		'acm_fecha_graba' => 'datetime'
	];

	protected $fillable = [
		'acm_fecha',
		'acm_legajo',
		'acm_documento',
		'acm_apyn',
		'acm_leyenda',
		'acm_n_heredera',
		'acm_c01leyen',
		'acm_subse',
		'acm_secre',
		'acm_funcion_actual',
		'acm_formacion',
		'acm_patalogia',
		'acm_patalogia_otras',
		'acm_lic_larga_duracion',
		'acm_lic_medica_comun',
		'fecha_desde',
		'fecha_hasta',
		'acm_obs',
		'acm_medico_tratante',
		'acm_conclusiones',
		'fecha_alta_medica',
		'fecha_retorno_lab',
		'acm_cambio_funcion',
		'acm_tareas_no',
		'acm_ate_publico',
		'acm_admi_conpc',
		'acm_admi_sinpc',
		'acm_oper_calif',
		'acm_oper_nocalif',
		'acm_descr_tarea',
		'estado',
		'fealta',
		'usualta',
		'femod',
		'usumod',
		'prof1',
		'prof2',
		'prof3',
		'acm_fecha_graba'
	];
}
