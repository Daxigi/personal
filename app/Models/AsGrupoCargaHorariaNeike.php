<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsGrupoCargaHorariaNeike
 * 
 * @property int $gch_id_neike
 * @property int $tch_id_neike
 * @property string|null $gch_modulo_neike
 * @property string $gch_descr_corta_neike
 * @property string|null $gch_descr_larga_neike
 * @property string|null $gch_dias_neike
 * @property int|null $gch_horas_neike
 * @property time without time zone|null $gch_hora_desde_1_neike
 * @property time without time zone|null $gch_hora_hasta_1_neike
 * @property time without time zone|null $gch_hora_desde_2_neike
 * @property time without time zone|null $gch_hora_hasta_2_neike
 * @property time without time zone|null $gch_tolerancia_normal_neike
 * @property time without time zone|null $gch_tolerancia_especial_neike
 * @property string|null $gch_param_1d_neike
 * @property string|null $gch_param_1_neike
 * @property string|null $gch_param_2d_neike
 * @property string|null $gch_param_2_neike
 * @property string|null $gch_param_3d_neike
 * @property string|null $gch_param_3_neike
 * @property string|null $gch_param_4d_neike
 * @property string|null $gch_param_4_neike
 * @property string|null $gch_estado_neike
 * 
 * @property AsTipoCargaHorarium $as_tipo_carga_horarium
 * @property Collection|AsLegajoGchNeike[] $as_legajo_gch_neikes
 *
 * @package App\Models
 */
class AsGrupoCargaHorariaNeike extends Model
{
	protected $table = 'as_grupo_carga_horaria_neike';
	protected $primaryKey = 'gch_id_neike';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'gch_id_neike' => 'int',
		'tch_id_neike' => 'int',
		'gch_horas_neike' => 'int',
		'gch_hora_desde_1_neike' => 'time without time zone',
		'gch_hora_hasta_1_neike' => 'time without time zone',
		'gch_hora_desde_2_neike' => 'time without time zone',
		'gch_hora_hasta_2_neike' => 'time without time zone',
		'gch_tolerancia_normal_neike' => 'time without time zone',
		'gch_tolerancia_especial_neike' => 'time without time zone'
	];

	protected $fillable = [
		'tch_id_neike',
		'gch_modulo_neike',
		'gch_descr_corta_neike',
		'gch_descr_larga_neike',
		'gch_dias_neike',
		'gch_horas_neike',
		'gch_hora_desde_1_neike',
		'gch_hora_hasta_1_neike',
		'gch_hora_desde_2_neike',
		'gch_hora_hasta_2_neike',
		'gch_tolerancia_normal_neike',
		'gch_tolerancia_especial_neike',
		'gch_param_1d_neike',
		'gch_param_1_neike',
		'gch_param_2d_neike',
		'gch_param_2_neike',
		'gch_param_3d_neike',
		'gch_param_3_neike',
		'gch_param_4d_neike',
		'gch_param_4_neike',
		'gch_estado_neike'
	];

	public function as_tipo_carga_horarium()
	{
		return $this->belongsTo(AsTipoCargaHorarium::class, 'tch_id_neike');
	}

	public function as_legajo_gch_neikes()
	{
		return $this->hasMany(AsLegajoGchNeike::class, 'leg_gch_id_neike');
	}
}
