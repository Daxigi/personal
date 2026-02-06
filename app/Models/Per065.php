<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per065
 * 
 * @property int $p65id
 * @property string|null $p65cuit
 * @property string $p65nombre
 * @property string|null $p65dom_comercial
 * @property string|null $p65dom_legal
 * @property string|null $p65telefonos
 * @property string|null $p65email
 * @property string|null $p65cbu
 * @property string|null $p65persona_contacto
 * @property string|null $p65obs
 * @property string|null $p65nombre_fantasia
 * 
 * @property Collection|Per010[] $per010s
 *
 * @package App\Models
 */
class Per065 extends Model
{
	protected $table = 'per065';
	protected $primaryKey = 'p65id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p65id' => 'int'
	];

	protected $fillable = [
		'p65cuit',
		'p65nombre',
		'p65dom_comercial',
		'p65dom_legal',
		'p65telefonos',
		'p65email',
		'p65cbu',
		'p65persona_contacto',
		'p65obs',
		'p65nombre_fantasia'
	];

	public function per010s()
	{
		return $this->hasMany(Per010::class, 'p10empresa');
	}
}
