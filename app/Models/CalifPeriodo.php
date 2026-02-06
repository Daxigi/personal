<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CalifPeriodo
 * 
 * @property int $id_periodos
 * @property string|null $nombre
 * @property string|null $descripcion
 * @property Carbon|null $inicio_periodo
 * @property string|null $estado
 * 
 * @property Collection|Calificacione[] $calificaciones
 *
 * @package App\Models
 */
class CalifPeriodo extends Model
{
	protected $table = 'calif_periodos';
	protected $primaryKey = 'id_periodos';
	public $timestamps = false;

	protected $casts = [
		'inicio_periodo' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'inicio_periodo',
		'estado'
	];

	public function calificaciones()
	{
		return $this->hasMany(Calificacione::class, 'id_periodos');
	}
}
