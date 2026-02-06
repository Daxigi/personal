<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue017
 * 
 * @property int $s17adic
 * @property int $s17correl
 * @property int|null $s17grupo
 * @property int|null $s17niveld
 * @property int|null $s17nivelh
 * @property string|null $s17formula
 * 
 * @property Sue003 $sue003
 *
 * @package App\Models
 */
class Sue017 extends Model
{
	protected $table = 'sue017';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's17adic' => 'int',
		's17correl' => 'int',
		's17grupo' => 'int',
		's17niveld' => 'int',
		's17nivelh' => 'int'
	];

	protected $fillable = [
		's17grupo',
		's17niveld',
		's17nivelh',
		's17formula'
	];

	public function sue003()
	{
		return $this->belongsTo(Sue003::class, 's17adic');
	}
}
