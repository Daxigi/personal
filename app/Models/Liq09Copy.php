<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Liq09Copy
 * 
 * @property int $documento
 * @property string|null $apyn
 * @property int $tipliq
 * @property int $agrup
 * @property int $nivel
 * @property string|null $depresu
 * @property Carbon|null $feingreso
 * @property Carbon|null $fepromo
 * @property int|null $titulo
 * @property int|null $antig
 * @property Carbon|null $febaja
 * @property int|null $baja
 * @property Carbon|null $fe_fin_cont
 * @property string|null $documentacion
 *
 * @package App\Models
 */
class Liq09Copy extends Model
{
	protected $table = 'liq09_copy';
	protected $primaryKey = 'documento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'documento' => 'int',
		'tipliq' => 'int',
		'agrup' => 'int',
		'nivel' => 'int',
		'feingreso' => 'datetime',
		'fepromo' => 'datetime',
		'titulo' => 'int',
		'antig' => 'int',
		'febaja' => 'datetime',
		'baja' => 'int',
		'fe_fin_cont' => 'datetime'
	];

	protected $fillable = [
		'apyn',
		'tipliq',
		'agrup',
		'nivel',
		'depresu',
		'feingreso',
		'fepromo',
		'titulo',
		'antig',
		'febaja',
		'baja',
		'fe_fin_cont',
		'documentacion'
	];
}
