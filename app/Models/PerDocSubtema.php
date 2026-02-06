<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PerDocSubtema
 * 
 * @property int $tema_doc
 * @property int $subtema_doc
 * @property string|null $descripcion
 * 
 * @property PerDocTema $per_doc_tema
 *
 * @package App\Models
 */
class PerDocSubtema extends Model
{
	protected $table = 'per_doc_subtema';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tema_doc' => 'int',
		'subtema_doc' => 'int'
	];

	protected $fillable = [
		'descripcion'
	];

	public function per_doc_tema()
	{
		return $this->belongsTo(PerDocTema::class, 'tema_doc');
	}
}
