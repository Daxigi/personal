<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contrato
 * 
 * @property int $documento
 * @property int $correl
 * @property string|null $resol
 * @property Carbon|null $resol_f
 * @property Carbon $feini
 * @property Carbon|null $fefin
 *
 * @package App\Models
 */
class Contrato extends Model
{
	protected $table = 'contratos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'documento' => 'int',
		'correl' => 'int',
		'resol_f' => 'datetime',
		'feini' => 'datetime',
		'fefin' => 'datetime'
	];

	protected $fillable = [
		'resol',
		'resol_f',
		'feini',
		'fefin'
	];
}
