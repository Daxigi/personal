<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConcepNeikeTemp
 * 
 * @property int $documento
 * @property float|null $importe
 * @property int|null $cor_form
 *
 * @package App\Models
 */
class ConcepNeikeTemp extends Model
{
	protected $table = 'concep_neike_temp';
	protected $primaryKey = 'documento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'documento' => 'int',
		'importe' => 'float',
		'cor_form' => 'int'
	];

	protected $fillable = [
		'importe',
		'cor_form'
	];
}
