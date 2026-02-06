<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Maejub
 * 
 * @property float $dni
 * @property string $apellido
 * @property string $nombre
 * @property int $codtitulo
 * @property int $agrupa
 * @property int|null $nivel
 * @property string|null $expte
 * @property Carbon|null $fechaemi
 * @property string|null $obs
 * @property float $funjer
 *
 * @package App\Models
 */
class Maejub extends Model
{
	protected $table = 'maejub';
	protected $primaryKey = 'dni';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dni' => 'float',
		'codtitulo' => 'int',
		'agrupa' => 'int',
		'nivel' => 'int',
		'fechaemi' => 'datetime',
		'funjer' => 'float'
	];

	protected $fillable = [
		'apellido',
		'nombre',
		'codtitulo',
		'agrupa',
		'nivel',
		'expte',
		'fechaemi',
		'obs',
		'funjer'
	];
}
