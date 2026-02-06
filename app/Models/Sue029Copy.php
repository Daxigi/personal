<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue029Copy
 * 
 * @property int $s29documento
 * @property string|null $cbu1
 * @property string|null $cbu2
 * @property string|null $cuenta
 * @property bool|null $activo
 * @property string|null $cuil
 *
 * @package App\Models
 */
class Sue029Copy extends Model
{
	protected $table = 'sue029_copy';
	protected $primaryKey = 's29documento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's29documento' => 'int',
		'activo' => 'bool'
	];

	protected $fillable = [
		'cbu1',
		'cbu2',
		'cuenta',
		'activo',
		'cuil'
	];
}
