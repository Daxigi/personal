<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Scm001UbiAnexo
 * 
 * @property int $id_anexo_ubi
 * @property string|null $c01depresu
 * @property string|null $descripcion
 * @property int|null $pr03id
 * @property int $id_tipo_anexo
 * @property string|null $responsable
 * @property string|null $comentarios
 * @property string|null $telefonos
 * @property string|null $internos
 * @property string|null $email
 * 
 * @property Scm001|null $scm001
 * @property Scm001UbiAnexoTipo $scm001_ubi_anexo_tipo
 *
 * @package App\Models
 */
class Scm001UbiAnexo extends Model
{
	protected $table = 'scm001_ubi_anexo';
	protected $primaryKey = 'id_anexo_ubi';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_anexo_ubi' => 'int',
		'pr03id' => 'int',
		'id_tipo_anexo' => 'int'
	];

	protected $fillable = [
		'c01depresu',
		'descripcion',
		'pr03id',
		'id_tipo_anexo',
		'responsable',
		'comentarios',
		'telefonos',
		'internos',
		'email'
	];

	public function scm001()
	{
		return $this->belongsTo(Scm001::class, 'c01depresu');
	}

	public function scm001_ubi_anexo_tipo()
	{
		return $this->belongsTo(Scm001UbiAnexoTipo::class, 'id_tipo_anexo');
	}
}
