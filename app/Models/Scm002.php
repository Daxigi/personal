<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Scm002
 * 
 * @property string $c02idestado
 * @property string|null $c02descrip
 * @property string|null $mod_prog
 *
 * @package App\Models
 */
class Scm002 extends Model
{
	protected $table = 'scm002';
	protected $primaryKey = 'c02idestado';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'c02descrip',
		'mod_prog'
	];
}
