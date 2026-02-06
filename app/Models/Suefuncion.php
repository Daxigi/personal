<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Suefuncion
 * 
 * @property int $docum
 * @property string|null $descr
 *
 * @package App\Models
 */
class Suefuncion extends Model
{
	protected $table = 'suefuncion';
	protected $primaryKey = 'docum';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'docum' => 'int'
	];

	protected $fillable = [
		'descr'
	];
}
