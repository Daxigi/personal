<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Scm003
 * 
 * @property int $codba
 * @property string $nomba
 * 
 * @property Collection|Scm004Aux[] $scm004_auxes
 *
 * @package App\Models
 */
class Scm003 extends Model
{
	protected $table = 'scm003';
	protected $primaryKey = 'codba';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codba' => 'int'
	];

	protected $fillable = [
		'nomba'
	];

	public function scm004_auxes()
	{
		return $this->hasMany(Scm004Aux::class, 'codba');
	}
}
