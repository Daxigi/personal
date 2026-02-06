<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Scm001Rel
 * 
 * @property string $c01r_depresu
 * @property string|null $c01r_historia
 *
 * @package App\Models
 */
class Scm001Rel extends Model
{
	protected $table = 'scm001_rel';
	protected $primaryKey = 'c01r_depresu';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'c01r_historia'
	];
}
