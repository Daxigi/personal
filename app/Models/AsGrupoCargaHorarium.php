<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsGrupoCargaHorarium
 * 
 * @property int $gch_id
 * @property int $tch_id
 * @property string|null $gch_modulo
 * @property string $gch_descr_corta
 * @property string|null $gch_descr_larga
 * @property string|null $gch_dias
 * @property int|null $gch_horas
 * @property time without time zone|null $gch_hora_desde_1
 * @property time without time zone|null $gch_hora_hasta_1
 * @property time without time zone|null $gch_hora_desde_2
 * @property time without time zone|null $gch_hora_hasta_2
 * @property time without time zone|null $gch_tolerancia_normal
 * @property time without time zone|null $gch_tolerancia_especial
 * @property string|null $gch_param_1d
 * @property string|null $gch_param_1
 * @property string|null $gch_param_2d
 * @property string|null $gch_param_2
 * @property string|null $gch_param_3d
 * @property string|null $gch_param_3
 * @property string|null $gch_param_4d
 * @property string|null $gch_param_4
 * @property string|null $gch_estado
 * @property string|null $gch_dias2
 * @property int|null $gch_horas2
 * @property time without time zone|null $gch_hora_desde_22
 * @property time without time zone|null $gch_hora_hasta_22
 * @property time without time zone|null $gch_tolerancia_normal_2
 * @property time without time zone|null $gch_tolerancia_especial_2
 * @property string|null $gch_dias3
 * @property int|null $gch_horas3
 * @property time without time zone|null $gch_hora_desde_3
 * @property time without time zone|null $gch_hora_hasta_3
 * @property time without time zone|null $gch_tolerancia_normal_3
 * @property time without time zone|null $gch_tolerancia_especial_3
 * 
 * @property AsTipoCargaHorarium $as_tipo_carga_horarium
 * @property Collection|AmCertificado[] $am_certificados
 * @property Collection|AsLegajoGch[] $as_legajo_gches
 *
 * @package App\Models
 */
class AsGrupoCargaHorarium extends Model
{
	protected $table = 'as_grupo_carga_horaria';
	protected $primaryKey = 'gch_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'gch_id' => 'int',
		'tch_id' => 'int',
		'gch_horas' => 'int',
		'gch_hora_desde_1' => 'time without time zone',
		'gch_hora_hasta_1' => 'time without time zone',
		'gch_hora_desde_2' => 'time without time zone',
		'gch_hora_hasta_2' => 'time without time zone',
		'gch_tolerancia_normal' => 'time without time zone',
		'gch_tolerancia_especial' => 'time without time zone',
		'gch_horas2' => 'int',
		'gch_hora_desde_22' => 'time without time zone',
		'gch_hora_hasta_22' => 'time without time zone',
		'gch_tolerancia_normal_2' => 'time without time zone',
		'gch_tolerancia_especial_2' => 'time without time zone',
		'gch_horas3' => 'int',
		'gch_hora_desde_3' => 'time without time zone',
		'gch_hora_hasta_3' => 'time without time zone',
		'gch_tolerancia_normal_3' => 'time without time zone',
		'gch_tolerancia_especial_3' => 'time without time zone'
	];

	protected $fillable = [
		'tch_id',
		'gch_modulo',
		'gch_descr_corta',
		'gch_descr_larga',
		'gch_dias',
		'gch_horas',
		'gch_hora_desde_1',
		'gch_hora_hasta_1',
		'gch_hora_desde_2',
		'gch_hora_hasta_2',
		'gch_tolerancia_normal',
		'gch_tolerancia_especial',
		'gch_param_1d',
		'gch_param_1',
		'gch_param_2d',
		'gch_param_2',
		'gch_param_3d',
		'gch_param_3',
		'gch_param_4d',
		'gch_param_4',
		'gch_estado',
		'gch_dias2',
		'gch_horas2',
		'gch_hora_desde_22',
		'gch_hora_hasta_22',
		'gch_tolerancia_normal_2',
		'gch_tolerancia_especial_2',
		'gch_dias3',
		'gch_horas3',
		'gch_hora_desde_3',
		'gch_hora_hasta_3',
		'gch_tolerancia_normal_3',
		'gch_tolerancia_especial_3'
	];

	public function as_tipo_carga_horarium()
	{
		return $this->belongsTo(AsTipoCargaHorarium::class, 'tch_id');
	}

	public function am_certificados()
	{
		return $this->hasMany(AmCertificado::class, 'gch_asociado_tipo');
	}

	public function as_legajo_gches()
	{
		return $this->hasMany(AsLegajoGch::class, 'leg_gch_id');
	}
}
