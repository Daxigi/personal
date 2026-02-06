<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik10Liquidacione
 * 
 * @property int $nk10anio
 * @property int $nk10mes
 * @property int $nk10legajo
 * @property int|null $nk10docum
 * @property string|null $nk10apyn
 * @property string|null $nk10dep
 * @property int|null $nk10dias_trab
 * @property float|null $nk10basico
 * @property float|null $nk10osocial
 * @property float|null $nk10valorbasico
 * @property float|null $nk10adicionales
 * @property float|null $nk10embargo
 * @property float|null $nk10liquido
 * @property int|null $nk10tipo
 * @property float|null $nk10aporte_estatal_os
 * @property float|null $nk10aporte_osocial
 * @property string|null $nk10observaciones
 * 
 * @property Neik01 $neik01
 *
 * @package App\Models
 */
class Neik10Liquidacione extends Model
{
	protected $table = 'neik10_liquidaciones';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nk10anio' => 'int',
		'nk10mes' => 'int',
		'nk10legajo' => 'int',
		'nk10docum' => 'int',
		'nk10dias_trab' => 'int',
		'nk10basico' => 'float',
		'nk10osocial' => 'float',
		'nk10valorbasico' => 'float',
		'nk10adicionales' => 'float',
		'nk10embargo' => 'float',
		'nk10liquido' => 'float',
		'nk10tipo' => 'int',
		'nk10aporte_estatal_os' => 'float',
		'nk10aporte_osocial' => 'float'
	];

	protected $fillable = [
		'nk10docum',
		'nk10apyn',
		'nk10dep',
		'nk10dias_trab',
		'nk10basico',
		'nk10osocial',
		'nk10valorbasico',
		'nk10adicionales',
		'nk10embargo',
		'nk10liquido',
		'nk10tipo',
		'nk10aporte_estatal_os',
		'nk10aporte_osocial',
		'nk10observaciones'
	];

	public function neik01()
	{
		return $this->belongsTo(Neik01::class, 'nk10legajo');
	}
}
