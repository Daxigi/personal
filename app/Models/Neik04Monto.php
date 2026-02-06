<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik04Monto
 * 
 * @property int $nk4legajo
 * @property int $nk4id
 * @property Carbon|null $nk4fe_desde
 * @property float|null $nk4importe
 * 
 * @property Neik01 $neik01
 *
 * @package App\Models
 */
class Neik04Monto extends Model
{
	protected $table = 'neik04_monto';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nk4legajo' => 'int',
		'nk4id' => 'int',
		'nk4fe_desde' => 'datetime',
		'nk4importe' => 'float'
	];

	protected $fillable = [
		'nk4fe_desde',
		'nk4importe'
	];

	public function neik01()
	{
		return $this->belongsTo(Neik01::class, 'nk4legajo');
	}
}
