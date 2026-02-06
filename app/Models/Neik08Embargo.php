<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik08Embargo
 * 
 * @property int $nk8legajo
 * @property int $nk8embargo
 * @property int|null $nk8oficio
 * @property Carbon|null $nk8fe_oficio
 * @property string|null $nk8juzgado
 * @property string|null $nk8secretaria
 * @property int|null $nk8nro_expte
 * @property int|null $nk8anio_expte
 * @property string|null $nk8caratula
 * @property float|null $nk8porcentaje
 * @property Carbon|null $nk8fe_inicio
 * @property int|null $nk8cod_deposito
 * @property int|null $nk8nro_cuenta
 * @property int|null $nk8dig_cuenta
 * 
 * @property Neik01 $neik01
 *
 * @package App\Models
 */
class Neik08Embargo extends Model
{
	protected $table = 'neik08_embargos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nk8legajo' => 'int',
		'nk8embargo' => 'int',
		'nk8oficio' => 'int',
		'nk8fe_oficio' => 'datetime',
		'nk8nro_expte' => 'int',
		'nk8anio_expte' => 'int',
		'nk8porcentaje' => 'float',
		'nk8fe_inicio' => 'datetime',
		'nk8cod_deposito' => 'int',
		'nk8nro_cuenta' => 'int',
		'nk8dig_cuenta' => 'int'
	];

	protected $hidden = [
		'nk8secretaria'
	];

	protected $fillable = [
		'nk8oficio',
		'nk8fe_oficio',
		'nk8juzgado',
		'nk8secretaria',
		'nk8nro_expte',
		'nk8anio_expte',
		'nk8caratula',
		'nk8porcentaje',
		'nk8fe_inicio',
		'nk8cod_deposito',
		'nk8nro_cuenta',
		'nk8dig_cuenta'
	];

	public function neik01()
	{
		return $this->belongsTo(Neik01::class, 'nk8legajo');
	}
}
