<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Scm004
 * 
 * @property int $codca
 * @property string|null $nomca
 * @property float $hdesde
 * @property float $hhasta
 * @property string|null $lado
 * @property int $codba
 *
 * @package App\Models
 */
class Scm004 extends Model
{
	protected $table = 'scm004';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codca' => 'int',
		'hdesde' => 'float',
		'hhasta' => 'float',
		'codba' => 'int'
	];

	protected $fillable = [
		'nomca',
		'lado'
	];
}
