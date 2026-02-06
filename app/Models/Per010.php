<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per010
 * 
 * @property int $p10legajo
 * @property int $p10corr
 * @property int $p10tipo_seguro
 * @property int $p10empresa
 * @property string $p10poliza
 * @property Carbon $p10vige_desde
 * @property Carbon $p10vige_hasta
 * @property string|null $p10cobertura
 * @property float|null $p10prima
 * @property float|null $p10cap_asegurado
 * 
 * @property Per001 $per001
 * @property Per067 $per067
 * @property Per065 $per065
 *
 * @package App\Models
 */
class Per010 extends Model
{
	protected $table = 'per010';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p10legajo' => 'int',
		'p10corr' => 'int',
		'p10tipo_seguro' => 'int',
		'p10empresa' => 'int',
		'p10vige_desde' => 'datetime',
		'p10vige_hasta' => 'datetime',
		'p10prima' => 'float',
		'p10cap_asegurado' => 'float'
	];

	protected $fillable = [
		'p10tipo_seguro',
		'p10empresa',
		'p10poliza',
		'p10vige_desde',
		'p10vige_hasta',
		'p10cobertura',
		'p10prima',
		'p10cap_asegurado'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'p10legajo');
	}

	public function per067()
	{
		return $this->belongsTo(Per067::class, 'p10tipo_seguro');
	}

	public function per065()
	{
		return $this->belongsTo(Per065::class, 'p10empresa');
	}
}
