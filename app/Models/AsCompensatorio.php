<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsCompensatorio
 * 
 * @property int $id_compensatorio
 * @property int $legajo
 * @property Carbon $fe_desde
 * @property Carbon $fe_hasta
 * @property string $autorizante
 * @property bool|null $incluir_feriados
 * @property float|null $horas
 * 
 * @property Per001 $per001
 *
 * @package App\Models
 */
class AsCompensatorio extends Model
{
	protected $table = 'as_compensatorios';
	protected $primaryKey = 'id_compensatorio';
	public $timestamps = false;

	protected $casts = [
		'legajo' => 'int',
		'fe_desde' => 'datetime',
		'fe_hasta' => 'datetime',
		'incluir_feriados' => 'bool',
		'horas' => 'float'
	];

	protected $fillable = [
		'legajo',
		'fe_desde',
		'fe_hasta',
		'autorizante',
		'incluir_feriados',
		'horas'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'legajo');
	}
}
