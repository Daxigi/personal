<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Scm007
 * 
 * @property int $c07id
 * @property int $c07id_pcia
 * @property string $c07localidad
 * @property bool|null $activo
 * 
 * @property Scm006 $scm006
 *
 * @package App\Models
 */
class Scm007 extends Model
{
	protected $table = 'scm007';
	protected $primaryKey = 'c07id';
	public $timestamps = false;

	protected $casts = [
		'c07id_pcia' => 'int',
		'activo' => 'bool'
	];

	protected $fillable = [
		'c07id_pcia',
		'c07localidad',
		'activo'
	];

	public function scm006()
	{
		return $this->belongsTo(Scm006::class, 'c07id_pcia');
	}
}
