<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Scm001
 * 
 * @property string|null $c01estado
 * @property string|null $c01feinvi
 * @property string|null $c01depsecr
 * @property string|null $c01depsubs
 * @property string|null $c01depersu
 * @property string|null $c01depdire
 * @property string|null $c01depdpto
 * @property string|null $c01depdivi
 * @property string|null $c01leyen
 * @property string $c01depresu
 * @property int|null $c01ubi_geo_id
 * @property int|null $c01jefe
 * @property string|null $c01contacto
 * @property string|null $c01telefonos
 * @property string|null $c01internos
 * @property string|null $c01email
 * 
 * @property Collection|Scm001UbiAnexo[] $scm001_ubi_anexos
 *
 * @package App\Models
 */
class Scm001 extends Model
{
	protected $table = 'scm001';
	protected $primaryKey = 'c01depresu';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'c01ubi_geo_id' => 'int',
		'c01jefe' => 'int'
	];

	protected $fillable = [
		'c01estado',
		'c01feinvi',
		'c01depsecr',
		'c01depsubs',
		'c01depersu',
		'c01depdire',
		'c01depdpto',
		'c01depdivi',
		'c01leyen',
		'c01ubi_geo_id',
		'c01jefe',
		'c01contacto',
		'c01telefonos',
		'c01internos',
		'c01email'
	];

	public function scm001_ubi_anexos()
	{
		return $this->hasMany(Scm001UbiAnexo::class, 'c01depresu');
	}
}
