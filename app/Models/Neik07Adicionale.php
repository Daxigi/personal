<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik07Adicionale
 * 
 * @property int $nk7legajo
 * @property int $nk7correl
 * @property int|null $nk7concepto
 * @property float|null $nk7importe
 * @property int|null $nk7aa_desde
 * @property int|null $nk7mm_desde
 * @property int|null $nk7aa_hasta
 * @property int|null $nk7mm_hasta
 * 
 * @property Neik01 $neik01
 *
 * @package App\Models
 */
class Neik07Adicionale extends Model
{
	protected $table = 'neik07_adicionales';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nk7legajo' => 'int',
		'nk7correl' => 'int',
		'nk7concepto' => 'int',
		'nk7importe' => 'float',
		'nk7aa_desde' => 'int',
		'nk7mm_desde' => 'int',
		'nk7aa_hasta' => 'int',
		'nk7mm_hasta' => 'int'
	];

	protected $fillable = [
		'nk7concepto',
		'nk7importe',
		'nk7aa_desde',
		'nk7mm_desde',
		'nk7aa_hasta',
		'nk7mm_hasta'
	];

	public function neik01()
	{
		return $this->belongsTo(Neik01::class, 'nk7legajo');
	}
}
