<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsLegajoGch
 * 
 * @property int $p01legajo
 * @property int $leg_gch_id
 * @property Carbon $leg_gch_fedesde
 * @property Carbon|null $leg_gch_fehasta
 * @property string|null $leg_gch_comentarios
 * @property Carbon|null $leg_gch_fealta
 * @property Carbon|null $leg_gch_femod
 * @property int $leg_gch_correl
 * @property int|null $cod_unidad
 * @property bool|null $no_procesa
 * @property int|null $tipo_reg
 * @property string|null $imag_gch
 * @property int|null $cod_unidad2
 * @property int|null $cod_unidad3
 * @property bool|null $intinerante
 * @property bool|null $contraturno
 * @property string|null $n_heredera_contr
 * @property string|null $funcion_contraturno
 * @property string|null $depen
 * @property string|null $funcion
 * 
 * @property Per001 $per001
 * @property AsGrupoCargaHorarium $as_grupo_carga_horarium
 *
 * @package App\Models
 */
class AsLegajoGch extends Model
{
	protected $table = 'as_legajo_gch';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p01legajo' => 'int',
		'leg_gch_id' => 'int',
		'leg_gch_fedesde' => 'datetime',
		'leg_gch_fehasta' => 'datetime',
		'leg_gch_fealta' => 'datetime',
		'leg_gch_femod' => 'datetime',
		'leg_gch_correl' => 'int',
		'cod_unidad' => 'int',
		'no_procesa' => 'bool',
		'tipo_reg' => 'int',
		'cod_unidad2' => 'int',
		'cod_unidad3' => 'int',
		'intinerante' => 'bool',
		'contraturno' => 'bool'
	];

	protected $fillable = [
		'leg_gch_id',
		'leg_gch_fedesde',
		'leg_gch_fehasta',
		'leg_gch_comentarios',
		'leg_gch_fealta',
		'leg_gch_femod',
		'cod_unidad',
		'no_procesa',
		'tipo_reg',
		'imag_gch',
		'cod_unidad2',
		'cod_unidad3',
		'intinerante',
		'contraturno',
		'n_heredera_contr',
		'funcion_contraturno',
		'depen',
		'funcion'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'p01legajo');
	}

	public function as_grupo_carga_horarium()
	{
		return $this->belongsTo(AsGrupoCargaHorarium::class, 'leg_gch_id');
	}
}
