<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsLegajoGchNeike
 * 
 * @property int $legajo_neike
 * @property int $leg_gch_id_neike
 * @property Carbon $leg_gch_fedesde_neike
 * @property Carbon|null $leg_gch_fehasta_neike
 * @property string|null $leg_gch_comentarios_neike
 * @property Carbon|null $leg_gch_fealta_neike
 * @property Carbon|null $leg_gch_femod_neike
 * @property int $leg_gch_correl_neike
 * @property int|null $cod_unidad_neike
 * @property bool|null $no_procesa_neike
 * @property int|null $tipo_reg_neike
 * @property string|null $imag_gch
 * @property int|null $cod_unidad2
 * @property int|null $cod_unidad3
 * @property bool|null $intinerante
 * @property bool|null $contraturno
 * @property string|null $n_heredera_contr
 * @property string|null $funcion_contraturno
 * 
 * @property AsGrupoCargaHorariaNeike $as_grupo_carga_horaria_neike
 *
 * @package App\Models
 */
class AsLegajoGchNeike extends Model
{
	protected $table = 'as_legajo_gch_neike';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'legajo_neike' => 'int',
		'leg_gch_id_neike' => 'int',
		'leg_gch_fedesde_neike' => 'datetime',
		'leg_gch_fehasta_neike' => 'datetime',
		'leg_gch_fealta_neike' => 'datetime',
		'leg_gch_femod_neike' => 'datetime',
		'leg_gch_correl_neike' => 'int',
		'cod_unidad_neike' => 'int',
		'no_procesa_neike' => 'bool',
		'tipo_reg_neike' => 'int',
		'cod_unidad2' => 'int',
		'cod_unidad3' => 'int',
		'intinerante' => 'bool',
		'contraturno' => 'bool'
	];

	protected $fillable = [
		'leg_gch_id_neike',
		'leg_gch_fedesde_neike',
		'leg_gch_fehasta_neike',
		'leg_gch_comentarios_neike',
		'leg_gch_fealta_neike',
		'leg_gch_femod_neike',
		'cod_unidad_neike',
		'no_procesa_neike',
		'tipo_reg_neike',
		'imag_gch',
		'cod_unidad2',
		'cod_unidad3',
		'intinerante',
		'contraturno',
		'n_heredera_contr',
		'funcion_contraturno'
	];

	public function as_grupo_carga_horaria_neike()
	{
		return $this->belongsTo(AsGrupoCargaHorariaNeike::class, 'leg_gch_id_neike');
	}
}
