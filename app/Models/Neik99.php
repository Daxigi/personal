<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik99
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
 * @property int|null $id_ce
 * @property Carbon|null $fepromo
 * 
 * @property Neik99TipoLey|null $neik99_tipo_ley
 *
 * @package App\Models
 */
class Neik99 extends Model
{
	protected $table = 'neik99';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'legajo' => 'int',
		'documento' => 'int',
		'sit_rev' => 'int',
		'feingreso' => 'datetime',
		'id_ce' => 'int',
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
		'id_ce',
		'fepromo'
	];

	public function neik99_tipo_ley()
	{
		return $this->belongsTo(Neik99TipoLey::class, 'id_ce');
	}
}
