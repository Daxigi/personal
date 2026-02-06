<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Per069
 * 
 * @property int $p69id
 * @property string $p69funcion
 * @property string|null $p69letras
 * @property string|null $inhabilita
 *
 * @package App\Models
 */
class Per069 extends Model
{
	protected $table = 'per069';
	protected $primaryKey = 'p69id';
	public $timestamps = false;

	protected $fillable = [
		'p69funcion',
		'p69letras',
		'inhabilita'
	];
}
