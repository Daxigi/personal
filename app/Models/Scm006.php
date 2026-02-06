<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Scm006
 * 
 * @property int $c06id
 * @property string $c06pcia
 * @property bool|null $activo
 * 
 * @property Collection|Scm007[] $scm007s
 *
 * @package App\Models
 */
class Scm006 extends Model
{
	protected $table = 'scm006';
	protected $primaryKey = 'c06id';
	public $timestamps = false;

	protected $casts = [
		'activo' => 'bool'
	];

	protected $fillable = [
		'c06pcia',
		'activo'
	];

	public function scm007s()
	{
		return $this->hasMany(Scm007::class, 'c07id_pcia');
	}
}
