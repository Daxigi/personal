<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik02
 * 
 * @property int $nk2legajo
 * @property int $nk2docum
 * @property int|null $nk2relacion
 * @property string|null $nk2apyn_rel
 * @property Carbon|null $nk2fenac
 * @property Carbon|null $nk2fpv
 * @property bool|null $nk2discapacitado
 * @property string|null $nk2tipodisc
 * @property string|null $nk2estado
 * @property string|null $nk2usualta
 * @property Carbon|null $nk2fealta
 * @property string|null $nk2usumod
 * @property Carbon|null $nk2femod
 * @property string|null $nk2domicilio
 * @property bool|null $nk2obra_social
 * 
 * @property Collection|AmIcalDiagnosticoNk[] $am_ical_diagnostico_nks
 *
 * @package App\Models
 */
class Neik02 extends Model
{
	protected $table = 'neik02';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nk2legajo' => 'int',
		'nk2docum' => 'int',
		'nk2relacion' => 'int',
		'nk2fenac' => 'datetime',
		'nk2fpv' => 'datetime',
		'nk2discapacitado' => 'bool',
		'nk2fealta' => 'datetime',
		'nk2femod' => 'datetime',
		'nk2obra_social' => 'bool'
	];

	protected $fillable = [
		'nk2relacion',
		'nk2apyn_rel',
		'nk2fenac',
		'nk2fpv',
		'nk2discapacitado',
		'nk2tipodisc',
		'nk2estado',
		'nk2usualta',
		'nk2fealta',
		'nk2usumod',
		'nk2femod',
		'nk2domicilio',
		'nk2obra_social'
	];

	public function am_ical_diagnostico_nks()
	{
		return $this->hasMany(AmIcalDiagnosticoNk::class, 'nk2legajo');
	}
}
