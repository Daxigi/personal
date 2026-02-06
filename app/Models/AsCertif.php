<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsCertif
 * 
 * @property int $id_certif
 * @property int|null $cert_legajo
 * @property int|null $cert_documento
 * @property string|null $cert_apyn
 * @property string|null $cert_leyenda
 * @property string|null $cert_n_heredera
 * @property string|null $cert_c01leyen
 * @property string|null $autorizante
 * @property int|null $estado
 * @property Carbon|null $fealta
 * @property string|null $usualta
 * @property Carbon|null $femod
 * @property string|null $usumod
 * @property int|null $anio
 * @property int|null $mes
 * @property int|null $id_operacion
 * @property int|null $diastrab
 *
 * @package App\Models
 */
class AsCertif extends Model
{
	protected $table = 'as_certif';
	protected $primaryKey = 'id_certif';
	public $timestamps = false;

	protected $casts = [
		'cert_legajo' => 'int',
		'cert_documento' => 'int',
		'estado' => 'int',
		'fealta' => 'datetime',
		'femod' => 'datetime',
		'anio' => 'int',
		'mes' => 'int',
		'id_operacion' => 'int',
		'diastrab' => 'int'
	];

	protected $fillable = [
		'cert_legajo',
		'cert_documento',
		'cert_apyn',
		'cert_leyenda',
		'cert_n_heredera',
		'cert_c01leyen',
		'autorizante',
		'estado',
		'fealta',
		'usualta',
		'femod',
		'usumod',
		'anio',
		'mes',
		'id_operacion',
		'diastrab'
	];
}
