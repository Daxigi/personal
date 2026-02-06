<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PerNeike
 * 
 * @property int|null $legajo
 * @property int|null $documento
 * @property string|null $apyn
 * @property int|null $sit_rev
 * @property string|null $leyenda
 * @property string|null $depen
 * @property string|null $n_heredera
 * @property string|null $c01leyen
 * @property string|null $estado
 * @property Carbon|null $feingreso
 * @property int|null $agrup
 * @property int|null $nivel
 * @property Carbon|null $fepromo
 * @property string|null $sexo
 * @property string|null $agrup_l
 * @property string|null $nivel_l
 *
 * @package App\Models
 */
class PerNeike extends Model
{
	protected $table = 'per_neike';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'legajo' => 'int',
		'documento' => 'int',
		'sit_rev' => 'int',
		'feingreso' => 'datetime',
		'agrup' => 'int',
		'nivel' => 'int',
		'fepromo' => 'datetime'
	];

	protected $fillable = [
		'legajo',
		'documento',
		'apyn',
		'sit_rev',
		'leyenda',
		'depen',
		'n_heredera',
		'c01leyen',
		'estado',
		'feingreso',
		'agrup',
		'nivel',
		'fepromo',
		'sexo',
		'agrup_l',
		'nivel_l'
	];
}
