<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AnxRubro
 * 
 * @property int $rubro
 * @property string|null $descripcion
 * 
 * @property Collection|Per066[] $per066s
 *
 * @package App\Models
 */
class AnxRubro extends Model
{
	protected $table = 'anx_rubros';
	protected $primaryKey = 'rubro';
	public $timestamps = false;

	protected $fillable = [
		'descripcion'
	];

	public function per066s()
	{
		return $this->hasMany(Per066::class, 'p66rubro');
	}
}
