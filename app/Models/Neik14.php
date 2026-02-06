<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik14
 * 
 * @property int $n14codliq
 * @property int $n14legajo
 * @property string|null $n14apyn
 * @property Carbon|null $n14fe_ingreso
 * @property int|null $n14sit_rev
 * @property int|null $n14agrup
 * @property int|null $n14nivel
 * @property Carbon|null $n14fe_nov
 * @property float|null $n14depen
 * @property int|null $n14codtit
 * @property int|null $n14dias
 * @property string|null $n14estado
 * @property int|null $n14recibo
 * @property float|null $n14haberes
 * @property float|null $n14dscto
 * @property float|null $n14liquido
 * @property Carbon|null $n14feenvio
 * @property Carbon|null $n14fepago
 * @property Carbon|null $n14feenvio_bco
 * 
 * @property Sue012 $sue012
 * @property Neik01 $neik01
 *
 * @package App\Models
 */
class Neik14 extends Model
{
	protected $table = 'neik14';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'n14codliq' => 'int',
		'n14legajo' => 'int',
		'n14fe_ingreso' => 'datetime',
		'n14sit_rev' => 'int',
		'n14agrup' => 'int',
		'n14nivel' => 'int',
		'n14fe_nov' => 'datetime',
		'n14depen' => 'float',
		'n14codtit' => 'int',
		'n14dias' => 'int',
		'n14recibo' => 'int',
		'n14haberes' => 'float',
		'n14dscto' => 'float',
		'n14liquido' => 'float',
		'n14feenvio' => 'datetime',
		'n14fepago' => 'datetime',
		'n14feenvio_bco' => 'datetime'
	];

	protected $fillable = [
		'n14apyn',
		'n14fe_ingreso',
		'n14sit_rev',
		'n14agrup',
		'n14nivel',
		'n14fe_nov',
		'n14depen',
		'n14codtit',
		'n14dias',
		'n14estado',
		'n14recibo',
		'n14haberes',
		'n14dscto',
		'n14liquido',
		'n14feenvio',
		'n14fepago',
		'n14feenvio_bco'
	];

	public function sue012()
	{
		return $this->belongsTo(Sue012::class, 'n14codliq');
	}

	public function neik01()
	{
		return $this->belongsTo(Neik01::class, 'n14legajo');
	}
}
