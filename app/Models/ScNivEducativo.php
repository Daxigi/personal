<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ScNivEducativo
 * 
 * @property int $id_nivel
 * @property string $descripcion
 * @property int $jerarquia
 * 
 * @property Collection|Per005[] $per005s
 *
 * @package App\Models
 */
class ScNivEducativo extends Model
{
	protected $table = 'sc_niv_educativo';
	protected $primaryKey = 'id_nivel';
	public $timestamps = false;

	protected $casts = [
		'jerarquia' => 'int'
	];

	protected $fillable = [
		'descripcion',
		'jerarquia'
	];

	public function per005s()
	{
		return $this->hasMany(Per005::class, 'id_nivel');
	}
}
