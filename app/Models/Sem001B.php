<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sem001B
 * 
 * @property int $e01legajo
 * @property int $e01cod_emb
 * @property int $e01correl_emb
 * @property int|null $e01orden
 * @property string|null $e01letra
 * @property int|null $e01anio
 * @property string|null $e01juzgado
 * @property string|null $e01secretaria
 * @property string|null $e01expte_juzgado_n
 * @property int|null $e01expte_juzgado_a
 * @property int|null $e01nro_oficio
 * @property string|null $e01caratula
 * @property string|null $e01fedes_mm
 * @property int|null $e01fedes_aa
 * @property string|null $e01fehas_mm
 * @property int|null $e01fehas_aa
 * @property string|null $e01estado
 * @property string|null $e01comentario
 * @property string|null $e01cbu
 * @property float|null $e01importe_ini
 * @property int|null $e01nro_cuenta
 * @property string|null $e01dgto_cuenta
 * @property string|null $e01cod_deposito
 * @property int|null $e01codigo_bco
 * @property string|null $usualta
 * @property Carbon|null $fecalta
 * @property string|null $usumod
 * @property Carbon|null $femod
 *
 * @package App\Models
 */
class Sem001B extends Model
{
	protected $table = 'sem001_b';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'e01legajo' => 'int',
		'e01cod_emb' => 'int',
		'e01correl_emb' => 'int',
		'e01orden' => 'int',
		'e01anio' => 'int',
		'e01expte_juzgado_a' => 'int',
		'e01nro_oficio' => 'int',
		'e01fedes_aa' => 'int',
		'e01fehas_aa' => 'int',
		'e01importe_ini' => 'float',
		'e01nro_cuenta' => 'int',
		'e01codigo_bco' => 'int',
		'fecalta' => 'datetime',
		'femod' => 'datetime'
	];

	protected $hidden = [
		'e01secretaria'
	];

	protected $fillable = [
		'e01orden',
		'e01letra',
		'e01anio',
		'e01juzgado',
		'e01secretaria',
		'e01expte_juzgado_n',
		'e01expte_juzgado_a',
		'e01nro_oficio',
		'e01caratula',
		'e01fedes_mm',
		'e01fedes_aa',
		'e01fehas_mm',
		'e01fehas_aa',
		'e01estado',
		'e01comentario',
		'e01cbu',
		'e01importe_ini',
		'e01nro_cuenta',
		'e01dgto_cuenta',
		'e01cod_deposito',
		'e01codigo_bco',
		'usualta',
		'fecalta',
		'usumod',
		'femod'
	];
}
