<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik05Certificacion
 * 
 * @property int $nk5legajo
 * @property int $nk5anio
 * @property int $nk5mes
 * @property int|null $nk5dias_trabajados
 * @property string|null $nk5dep_cert
 * @property int|null $nk5documento
 * 
 * @property Neik01 $neik01
 *
 * @package App\Models
 */
class Neik05Certificacion extends Model
{
	protected $table = 'neik05_certificacion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nk5legajo' => 'int',
		'nk5anio' => 'int',
		'nk5mes' => 'int',
		'nk5dias_trabajados' => 'int',
		'nk5documento' => 'int'
	];

	protected $fillable = [
		'nk5dias_trabajados',
		'nk5dep_cert',
		'nk5documento'
	];

	public function neik01()
	{
		return $this->belongsTo(Neik01::class, 'nk5legajo');
	}
}
