<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per005
 * 
 * @property int $p05legajo
 * @property int $p05docum
 * @property int $p05id
 * @property int $p05tipocert
 * @property Carbon $p05fecert
 * @property Carbon $p05fepres
 * @property string|null $p05emisor
 * @property string|null $p05estado
 * @property string|null $p05usualta
 * @property Carbon|null $p05fealta
 * @property string|null $p05usumod
 * @property Carbon|null $p05femod
 * @property Carbon|null $p05fevenc
 * @property int|null $id_institucion
 * @property int|null $id_nivel
 * @property int|null $anio_cursado
 * @property string|null $observaciones
 * @property int|null $p05mesliq
 * @property int|null $p05anioliq
 * 
 * @property Per004 $per004
 * @property Per001 $per001
 * @property Per068 $per068
 * @property ScNivEducativo|null $sc_niv_educativo
 *
 * @package App\Models
 */
class Per005 extends Model
{
	protected $table = 'per005';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p05legajo' => 'int',
		'p05docum' => 'int',
		'p05id' => 'int',
		'p05tipocert' => 'int',
		'p05fecert' => 'datetime',
		'p05fepres' => 'datetime',
		'p05fealta' => 'datetime',
		'p05femod' => 'datetime',
		'p05fevenc' => 'datetime',
		'id_institucion' => 'int',
		'id_nivel' => 'int',
		'anio_cursado' => 'int',
		'p05mesliq' => 'int',
		'p05anioliq' => 'int'
	];

	protected $fillable = [
		'p05tipocert',
		'p05fecert',
		'p05fepres',
		'p05emisor',
		'p05estado',
		'p05usualta',
		'p05fealta',
		'p05usumod',
		'p05femod',
		'p05fevenc',
		'id_institucion',
		'id_nivel',
		'anio_cursado',
		'observaciones',
		'p05mesliq',
		'p05anioliq'
	];

	public function per004()
	{
		return $this->belongsTo(Per004::class, 'p05legajo', 'p04docum')
					->where('per004.p04docum', '=', 'per005.p05legajo')
					->where('per004.p04legajo', '=', 'per005.p05legajo')
					->where('per004.p04docum', '=', 'per005.p05docum')
					->where('per004.p04legajo', '=', 'per005.p05docum');
	}

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'p05legajo');
	}

	public function per068()
	{
		return $this->belongsTo(Per068::class, 'p05tipocert');
	}

	public function sc_niv_educativo()
	{
		return $this->belongsTo(ScNivEducativo::class, 'id_nivel');
	}
}
