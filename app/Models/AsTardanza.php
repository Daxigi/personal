<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsTardanza
 * 
 * @property int $id_tardanza
 * @property Carbon $fecha
 * @property int $legajo
 * @property int $minutos
 * @property string|null $comentario
 * 
 * @property Per001 $per001
 *
 * @package App\Models
 */
class AsTardanza extends Model
{
	protected $table = 'as_tardanzas';
	protected $primaryKey = 'id_tardanza';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'legajo' => 'int',
		'minutos' => 'int'
	];

	protected $fillable = [
		'fecha',
		'legajo',
		'minutos',
		'comentario'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'legajo');
	}
}
