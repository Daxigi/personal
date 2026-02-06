<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PerDocTema
 * 
 * @property int $tema_doc
 * @property string|null $descripcion
 * 
 * @property Collection|PerDocSubtema[] $per_doc_subtemas
 *
 * @package App\Models
 */
class PerDocTema extends Model
{
	protected $table = 'per_doc_tema';
	protected $primaryKey = 'tema_doc';
	public $timestamps = false;

	protected $fillable = [
		'descripcion'
	];

	public function per_doc_subtemas()
	{
		return $this->hasMany(PerDocSubtema::class, 'tema_doc');
	}
}
