<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Scm004Aux
 * 
 * @property int $codca
 * @property string|null $nomca
 * @property float $hdesde
 * @property float $hhasta
 * @property string|null $lado
 * @property int $codba
 * 
 * @property Scm003 $scm003
 *
 * @package App\Models
 */
class Scm004Aux extends Model
{
	protected $table = 'scm004_aux';
	public $timestamps = false;

	protected $casts = [
		'hdesde' => 'float',
		'hhasta' => 'float',
		'codba' => 'int'
	];

	protected $fillable = [
		'nomca',
		'lado',
		'codba'
	];

	public function scm003()
	{
		return $this->belongsTo(Scm003::class, 'codba');
	}
}
