<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sem007
 * 
 * @property int $s15codliq
 * @property int|null $s14legajo
 * @property int $e01legajo
 * @property string|null $s14apyn
 * @property int|null $s14sit_rev
 * @property Carbon|null $s14feenvio
 * @property Carbon|null $s14fepago
 * @property Carbon|null $s14feenvio_bco
 * @property int|null $s15adic
 * @property float|null $s15importe
 * @property int $e01cod_emb
 * @property int $e01correl_emb
 * @property int|null $e01nro_cuenta
 * @property string|null $e01cod_deposito
 * @property string|null $e01cbu
 * @property string|null $cbu
 * @property string|null $e01estado
 * @property string|null $tipodoc
 * @property int|null $nrodoc
 * @property string|null $denominacion
 * @property string|null $situacion
 * @property int|null $e01codigo_bco
 * @property string|null $e01fedes_mm
 * @property int|null $e01fedes_aa
 * @property string|null $e01fehas_mm
 * @property int|null $e01fehas_aa
 *
 * @package App\Models
 */
class Sem007 extends Model
{
	protected $table = 'sem007';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's15codliq' => 'int',
		's14legajo' => 'int',
		'e01legajo' => 'int',
		's14sit_rev' => 'int',
		's14feenvio' => 'datetime',
		's14fepago' => 'datetime',
		's14feenvio_bco' => 'datetime',
		's15adic' => 'int',
		's15importe' => 'float',
		'e01cod_emb' => 'int',
		'e01correl_emb' => 'int',
		'e01nro_cuenta' => 'int',
		'nrodoc' => 'int',
		'e01codigo_bco' => 'int',
		'e01fedes_aa' => 'int',
		'e01fehas_aa' => 'int'
	];

	protected $fillable = [
		's14legajo',
		's14apyn',
		's14sit_rev',
		's14feenvio',
		's14fepago',
		's14feenvio_bco',
		's15adic',
		's15importe',
		'e01nro_cuenta',
		'e01cod_deposito',
		'e01cbu',
		'cbu',
		'e01estado',
		'tipodoc',
		'nrodoc',
		'denominacion',
		'situacion',
		'e01codigo_bco',
		'e01fedes_mm',
		'e01fedes_aa',
		'e01fehas_mm',
		'e01fehas_aa'
	];
}
