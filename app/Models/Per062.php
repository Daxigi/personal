<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per062
 * 
 * @property int $p62tipo_sanc
 * @property string|null $p62doc_aval
 * @property string $p62descr
 * @property string|null $p62aut_aplic
 * @property string $p62usualta
 * @property Carbon $p62fealta
 * @property string $p62usumod
 * @property Carbon $p62femod
 * @property int|null $p62lleva_fechas
 *
 * @package App\Models
 */
class Per062 extends Model
{
	protected $table = 'per062';
	protected $primaryKey = 'p62tipo_sanc';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p62tipo_sanc' => 'int',
		'p62fealta' => 'datetime',
		'p62femod' => 'datetime',
		'p62lleva_fechas' => 'int'
	];

	protected $fillable = [
		'p62doc_aval',
		'p62descr',
		'p62aut_aplic',
		'p62usualta',
		'p62fealta',
		'p62usumod',
		'p62femod',
		'p62lleva_fechas'
	];
}
