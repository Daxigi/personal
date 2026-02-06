<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sem004
 * 
 * @property int $e04legajo
 * @property int $e04cod_emb
 * @property int $e04correl_emb
 * @property int $e04cuota
 * @property int|null $e04anio
 * @property int|null $e04mes
 * @property float|null $e04importe
 * @property Carbon|null $e04fepago
 * 
 * @property Per001 $per001
 *
 * @package App\Models
 */
class Sem004 extends Model
{
	protected $table = 'sem004';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'e04legajo' => 'int',
		'e04cod_emb' => 'int',
		'e04correl_emb' => 'int',
		'e04cuota' => 'int',
		'e04anio' => 'int',
		'e04mes' => 'int',
		'e04importe' => 'float',
		'e04fepago' => 'datetime'
	];

	protected $fillable = [
		'e04anio',
		'e04mes',
		'e04importe',
		'e04fepago'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'e04legajo');
	}
}
