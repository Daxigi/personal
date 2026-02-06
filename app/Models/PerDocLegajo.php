<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PerDocLegajo
 * 
 * @property int $numero
 * @property int $anio
 * @property int $legajo
 * @property string $tipo_doc
 * 
 * @property Per001 $per001
 *
 * @package App\Models
 */
class PerDocLegajo extends Model
{
	protected $table = 'per_doc_legajos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'numero' => 'int',
		'anio' => 'int',
		'legajo' => 'int'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'legajo');
	}
}
