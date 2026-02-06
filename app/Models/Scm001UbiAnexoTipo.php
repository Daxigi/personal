<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Scm001UbiAnexoTipo
 * 
 * @property int $id_tipo_anexo
 * @property string $descripcion
 * @property int|null $estado
 * 
 * @property Collection|Scm001UbiAnexo[] $scm001_ubi_anexos
 *
 * @package App\Models
 */
class Scm001UbiAnexoTipo extends Model
{
	protected $table = 'scm001_ubi_anexo_tipo';
	protected $primaryKey = 'id_tipo_anexo';
	public $timestamps = false;

	protected $casts = [
		'estado' => 'int'
	];

	protected $fillable = [
		'descripcion',
		'estado'
	];

	public function scm001_ubi_anexos()
	{
		return $this->hasMany(Scm001UbiAnexo::class, 'id_tipo_anexo');
	}
}
