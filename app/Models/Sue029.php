<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue029
 * 
 * @property int $s29documento
 * @property string|null $cbu1
 * @property string|null $cbu2
 * @property string|null $cuenta
 * @property bool|null $activo
 * @property string|null $cuil
 * @property Carbon|null $fec_alta
 * @property string|null $observaciones
 *
 * @package App\Models
 */
class Sue029 extends Model
{
	protected $table = 'sue029';
	protected $primaryKey = 's29documento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's29documento' => 'int',
		'activo' => 'bool',
		'fec_alta' => 'datetime'
	];

	protected $fillable = [
		'cbu1',
		'cbu2',
		'cuenta',
		'activo',
		'cuil',
		'fec_alta',
		'observaciones'
	];
}
