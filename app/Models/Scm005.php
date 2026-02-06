<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Scm005
 * 
 * @property int $c05tipodoc
 * @property string|null $c05descr
 * @property string|null $c05formato
 * @property string|null $c05expr_regular
 *
 * @package App\Models
 */
class Scm005 extends Model
{
	protected $table = 'scm005';
	protected $primaryKey = 'c05tipodoc';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'c05tipodoc' => 'int'
	];

	protected $fillable = [
		'c05descr',
		'c05formato',
		'c05expr_regular'
	];
}
