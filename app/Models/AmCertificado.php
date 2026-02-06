<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AmCertificado
 * 
 * @property int $documento
 * @property int $correl
 * @property int $legajo
 * @property int $sit_revista
 * @property Carbon|null $fecha_certificado
 * @property string $art_id
 * @property int|null $dias_solicitados
 * @property int|null $dias_otorgados
 * @property Carbon $fecha_desde
 * @property Carbon $fecha_hasta
 * @property int|null $documento_familiar
 * @property string|null $comentarios
 * @property bool|null $at_domicilio
 * @property bool|null $at_consultorio
 * @property bool|null $at_familiar
 * @property string|null $tipo_cert
 * @property int|null $gch_asociado_tipo
 * @property int|null $gch_asociado_correl
 * @property int|null $id_patologia
 * @property bool|null $fuera_termino
 * @property string|null $diag_ampliado
 * @property Carbon|null $fe_consulta
 * @property bool|null $adj_hc
 * @property bool|null $adj_protocolo
 * @property int|null $id_sub_practica
 * @property bool|null $at_internacion
 * @property string|null $prof_aut
 * @property float|null $mat_prof
 * @property string|null $com_int
 * @property string|null $com_priv
 * @property float|null $id_gestion
 * @property float|null $id_audi
 * 
 * @property Per059 $per059
 * @property AsArticulo $as_articulo
 * @property AsGrupoCargaHorarium|null $as_grupo_carga_horarium
 *
 * @package App\Models
 */
class AmCertificado extends Model
{
	protected $table = 'am_certificados';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'documento' => 'int',
		'correl' => 'int',
		'legajo' => 'int',
		'sit_revista' => 'int',
		'fecha_certificado' => 'datetime',
		'dias_solicitados' => 'int',
		'dias_otorgados' => 'int',
		'fecha_desde' => 'datetime',
		'fecha_hasta' => 'datetime',
		'documento_familiar' => 'int',
		'at_domicilio' => 'bool',
		'at_consultorio' => 'bool',
		'at_familiar' => 'bool',
		'gch_asociado_tipo' => 'int',
		'gch_asociado_correl' => 'int',
		'id_patologia' => 'int',
		'fuera_termino' => 'bool',
		'fe_consulta' => 'datetime',
		'adj_hc' => 'bool',
		'adj_protocolo' => 'bool',
		'id_sub_practica' => 'int',
		'at_internacion' => 'bool',
		'mat_prof' => 'float',
		'id_gestion' => 'float',
		'id_audi' => 'float'
	];

	protected $fillable = [
		'legajo',
		'sit_revista',
		'fecha_certificado',
		'art_id',
		'dias_solicitados',
		'dias_otorgados',
		'fecha_desde',
		'fecha_hasta',
		'documento_familiar',
		'comentarios',
		'at_domicilio',
		'at_consultorio',
		'at_familiar',
		'tipo_cert',
		'gch_asociado_tipo',
		'gch_asociado_correl',
		'id_patologia',
		'fuera_termino',
		'diag_ampliado',
		'fe_consulta',
		'adj_hc',
		'adj_protocolo',
		'id_sub_practica',
		'at_internacion',
		'prof_aut',
		'mat_prof',
		'com_int',
		'com_priv',
		'id_gestion',
		'id_audi'
	];

	public function per059()
	{
		return $this->belongsTo(Per059::class, 'sit_revista');
	}

	public function as_articulo()
	{
		return $this->belongsTo(AsArticulo::class, 'art_id');
	}

	public function as_grupo_carga_horarium()
	{
		return $this->belongsTo(AsGrupoCargaHorarium::class, 'gch_asociado_tipo');
	}
}
