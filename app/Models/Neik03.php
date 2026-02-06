<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik03
 * 
 * @property int $nk3legajo
 * @property int $nk3id
 * @property Carbon|null $nk3feing
 * @property Carbon|null $nk3feegr
 * @property string|null $nk3depresu
 * @property string|null $nk3funcion
 * @property string|null $nk3dom_lab
 * @property string|null $nk3dias_ch
 * @property string|null $nk3horario
 * @property string|null $nk3jefe_inm
 * @property string|null $nk3usualta
 * @property Carbon|null $nk3fealta
 * @property string $nk3usumod
 * @property Carbon|null $nk3femod
 * @property int|null $nk3_convalida
 * @property string|null $nk3_convalida_nota
 * @property Carbon|null $nk3_convalida_fecha_hora
 * @property string|null $nk3_convalida_usuario
 * @property string|null $baja
 * 
 * @property Neik01 $neik01
 *
 * @package App\Models
 */
class Neik03 extends Model
{
	protected $table = 'neik03';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nk3legajo' => 'int',
		'nk3id' => 'int',
		'nk3feing' => 'datetime',
		'nk3feegr' => 'datetime',
		'nk3fealta' => 'datetime',
		'nk3femod' => 'datetime',
		'nk3_convalida' => 'int',
		'nk3_convalida_fecha_hora' => 'datetime'
	];

	protected $fillable = [
		'nk3feing',
		'nk3feegr',
		'nk3depresu',
		'nk3funcion',
		'nk3dom_lab',
		'nk3dias_ch',
		'nk3horario',
		'nk3jefe_inm',
		'nk3usualta',
		'nk3fealta',
		'nk3usumod',
		'nk3femod',
		'nk3_convalida',
		'nk3_convalida_nota',
		'nk3_convalida_fecha_hora',
		'nk3_convalida_usuario',
		'baja'
	];

	public function neik01()
	{
		return $this->belongsTo(Neik01::class, 'nk3legajo');
	}
}
