<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik06ConceptosLiquidacion
 * 
 * @property int $nk6concepto
 * @property string|null $nk6descripcion
 * @property float|null $nk6valor
 * @property string|null $nk6descr_valor
 * @property int|null $nk6codigo
 *
 * @package App\Models
 */
class Neik06ConceptosLiquidacion extends Model
{
	protected $table = 'neik06_conceptos_liquidacion';
	protected $primaryKey = 'nk6concepto';
	public $timestamps = false;

	protected $casts = [
		'nk6valor' => 'float',
		'nk6codigo' => 'int'
	];

	protected $fillable = [
		'nk6descripcion',
		'nk6valor',
		'nk6descr_valor',
		'nk6codigo'
	];
}
