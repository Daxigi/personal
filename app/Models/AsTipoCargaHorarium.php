<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AsTipoCargaHorarium
 * 
 * @property int $tch_id
 * @property string $tch_tipo
 * @property string|null $tch_descr
 * 
 * @property Collection|AsGrupoCargaHorariaNeike[] $as_grupo_carga_horaria_neikes
 * @property Collection|AsGrupoCargaHorarium[] $as_grupo_carga_horaria
 *
 * @package App\Models
 */
class AsTipoCargaHorarium extends Model
{
	protected $table = 'as_tipo_carga_horaria';
	protected $primaryKey = 'tch_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tch_id' => 'int'
	];

	protected $fillable = [
		'tch_tipo',
		'tch_descr'
	];

	public function as_grupo_carga_horaria_neikes()
	{
		return $this->hasMany(AsGrupoCargaHorariaNeike::class, 'tch_id_neike');
	}

	public function as_grupo_carga_horaria()
	{
		return $this->hasMany(AsGrupoCargaHorarium::class, 'tch_id');
	}
}
