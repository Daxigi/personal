<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per059
 * 
 * @property int $p59sit_rev
 * @property string $p59descr
 * @property string|null $p59usualta
 * @property Carbon|null $p59fealta
 * @property string|null $p59usumod
 * @property Carbon|null $p59femod
 * 
 * @property Collection|AmCertificado[] $am_certificados
 *
 * @package App\Models
 */
class Per059 extends Model
{
	protected $table = 'per059';
	protected $primaryKey = 'p59sit_rev';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p59sit_rev' => 'int',
		'p59fealta' => 'datetime',
		'p59femod' => 'datetime'
	];

	protected $fillable = [
		'p59descr',
		'p59usualta',
		'p59fealta',
		'p59usumod',
		'p59femod'
	];

	public function am_certificados()
	{
		return $this->hasMany(AmCertificado::class, 'sit_revista');
	}
}
