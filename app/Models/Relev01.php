<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Relev01
 * 
 * @property int $r01planilla
 * @property int|null $r01tipodoc
 * @property int $r01docum
 * @property string $r01apyn
 * @property string $r01revista
 * @property int $r01agrup
 * @property int $r01nivel
 * @property string $r01depresu
 * @property string|null $r01locdom
 * @property int|null $r01idpciadom
 * @property string|null $r01telefono
 * @property string|null $r01email
 * @property string|null $r01primario
 * @property string|null $r01secundario
 * @property string|null $r01tit_sec
 * @property string|null $r01universitario
 * @property string|null $r01tit_uni
 * @property string $r01func_actual
 * @property int|null $r01agrup_as
 * @property Carbon|null $r01fe_notif
 * @property string|null $r01obs
 * @property string $r01usualta
 * @property Carbon|null $r01fealta
 * @property string $r01usumod
 * @property Carbon|null $r01femod
 * @property string|null $r01domicilio
 *
 * @package App\Models
 */
class Relev01 extends Model
{
	protected $table = 'relev01';
	protected $primaryKey = 'r01planilla';
	public $timestamps = false;

	protected $casts = [
		'r01tipodoc' => 'int',
		'r01docum' => 'int',
		'r01agrup' => 'int',
		'r01nivel' => 'int',
		'r01idpciadom' => 'int',
		'r01agrup_as' => 'int',
		'r01fe_notif' => 'datetime',
		'r01fealta' => 'datetime',
		'r01femod' => 'datetime'
	];

	protected $fillable = [
		'r01tipodoc',
		'r01docum',
		'r01apyn',
		'r01revista',
		'r01agrup',
		'r01nivel',
		'r01depresu',
		'r01locdom',
		'r01idpciadom',
		'r01telefono',
		'r01email',
		'r01primario',
		'r01secundario',
		'r01tit_sec',
		'r01universitario',
		'r01tit_uni',
		'r01func_actual',
		'r01agrup_as',
		'r01fe_notif',
		'r01obs',
		'r01usualta',
		'r01fealta',
		'r01usumod',
		'r01femod',
		'r01domicilio'
	];
}
