<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per061
 * 
 * @property int $p61tipo_lic
 * @property string $p61doc_aval
 * @property string|null $p61descr
 * @property string|null $p61usualta
 * @property Carbon|null $p61fealta
 * @property string $p61usumod
 * @property Carbon|null $p61femod
 *
 * @package App\Models
 */
class Per061 extends Model
{
	protected $table = 'per061';
	protected $primaryKey = 'p61tipo_lic';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p61tipo_lic' => 'int',
		'p61fealta' => 'datetime',
		'p61femod' => 'datetime'
	];

	protected $fillable = [
		'p61doc_aval',
		'p61descr',
		'p61usualta',
		'p61fealta',
		'p61usumod',
		'p61femod'
	];
}
