<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per004Back181
 * 
 * @property int $p04legajo
 * @property int $p04docum
 * @property int $p04relacion
 * @property string $p04apyn_rel
 * @property Carbon $p04fenac
 * @property Carbon $p04fpv
 * @property string|null $p04estado
 * @property bool|null $p04discapacitado
 * @property bool|null $p04osocial
 * @property bool|null $p04salario
 * @property string|null $p04usualta
 * @property Carbon|null $p04fealta
 * @property string|null $p04usumod
 * @property Carbon|null $p04femod
 * @property string|null $p04domicilio
 *
 * @package App\Models
 */
class Per004Back181 extends Model
{
	protected $table = 'per004_back_181';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p04legajo' => 'int',
		'p04docum' => 'int',
		'p04relacion' => 'int',
		'p04fenac' => 'datetime',
		'p04fpv' => 'datetime',
		'p04discapacitado' => 'bool',
		'p04osocial' => 'bool',
		'p04salario' => 'bool',
		'p04fealta' => 'datetime',
		'p04femod' => 'datetime'
	];

	protected $fillable = [
		'p04legajo',
		'p04docum',
		'p04relacion',
		'p04apyn_rel',
		'p04fenac',
		'p04fpv',
		'p04estado',
		'p04discapacitado',
		'p04osocial',
		'p04salario',
		'p04usualta',
		'p04fealta',
		'p04usumod',
		'p04femod',
		'p04domicilio'
	];
}
