<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Per066
 * 
 * @property int $p66id
 * @property int $p66rubro
 * 
 * @property AnxRubro $anx_rubro
 *
 * @package App\Models
 */
class Per066 extends Model
{
	protected $table = 'per066';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p66id' => 'int',
		'p66rubro' => 'int'
	];

	public function anx_rubro()
	{
		return $this->belongsTo(AnxRubro::class, 'p66rubro');
	}
}
