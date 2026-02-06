<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue014
 * 
 * @property int $s14codliq
 * @property int $s14legajo
 * @property string|null $s14apyn
 * @property Carbon|null $s14fe_ingreso
 * @property int|null $s14sit_rev
 * @property int|null $s14agrup
 * @property int|null $s14nivel
 * @property Carbon|null $s14fe_nov
 * @property float|null $s14depen
 * @property int|null $s14codtit
 * @property int|null $s14dias
 * @property string|null $s14estado
 * @property int|null $s14recibo
 * @property float|null $s14haberes
 * @property float|null $s14dscto
 * @property float|null $s14liquido
 * @property Carbon|null $s14feenvio
 * @property Carbon|null $s14fepago
 * @property Carbon|null $s14feenvio_bco
 * 
 * @property Sue012 $sue012
 * @property Per001 $per001
 *
 * @package App\Models
 */
class Sue014 extends Model
{
	protected $table = 'sue014';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's14codliq' => 'int',
		's14legajo' => 'int',
		's14fe_ingreso' => 'datetime',
		's14sit_rev' => 'int',
		's14agrup' => 'int',
		's14nivel' => 'int',
		's14fe_nov' => 'datetime',
		's14depen' => 'float',
		's14codtit' => 'int',
		's14dias' => 'int',
		's14recibo' => 'int',
		's14haberes' => 'float',
		's14dscto' => 'float',
		's14liquido' => 'float',
		's14feenvio' => 'datetime',
		's14fepago' => 'datetime',
		's14feenvio_bco' => 'datetime'
	];

	protected $fillable = [
		's14apyn',
		's14fe_ingreso',
		's14sit_rev',
		's14agrup',
		's14nivel',
		's14fe_nov',
		's14depen',
		's14codtit',
		's14dias',
		's14estado',
		's14recibo',
		's14haberes',
		's14dscto',
		's14liquido',
		's14feenvio',
		's14fepago',
		's14feenvio_bco'
	];

	public function sue012()
	{
		return $this->belongsTo(Sue012::class, 's14codliq');
	}

	public function per001()
	{
		return $this->belongsTo(Per001::class, 's14legajo');
	}
}
