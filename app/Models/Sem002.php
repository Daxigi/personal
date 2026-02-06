<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sem002
 * 
 * @property int $e02legajo
 * @property int $e02codemb
 * @property int $e02cor_emb
 * @property float|null $e02cta_fija
 * @property float|null $e02hab_conapor
 * @property float|null $e02hab_sinapor
 * @property float|null $e02sac_conapor
 * @property float|null $e02sac_sinapor
 * @property bool|null $e02salario
 * @property bool|null $e02escolaridad
 * @property string|null $usualta
 * @property Carbon|null $fecalta
 * @property string|null $usumod
 * @property Carbon|null $femod
 * @property float|null $plus_conapor
 * @property float|null $plus_sinapor
 * 
 * @property Per001 $per001
 *
 * @package App\Models
 */
class Sem002 extends Model
{
	protected $table = 'sem002';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'e02legajo' => 'int',
		'e02codemb' => 'int',
		'e02cor_emb' => 'int',
		'e02cta_fija' => 'float',
		'e02hab_conapor' => 'float',
		'e02hab_sinapor' => 'float',
		'e02sac_conapor' => 'float',
		'e02sac_sinapor' => 'float',
		'e02salario' => 'bool',
		'e02escolaridad' => 'bool',
		'fecalta' => 'datetime',
		'femod' => 'datetime',
		'plus_conapor' => 'float',
		'plus_sinapor' => 'float'
	];

	protected $fillable = [
		'e02cta_fija',
		'e02hab_conapor',
		'e02hab_sinapor',
		'e02sac_conapor',
		'e02sac_sinapor',
		'e02salario',
		'e02escolaridad',
		'usualta',
		'fecalta',
		'usumod',
		'femod',
		'plus_conapor',
		'plus_sinapor'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'e02legajo');
	}
}
