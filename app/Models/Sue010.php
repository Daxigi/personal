<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue010
 * 
 * @property int $s10tipo_liq
 * @property string|null $s10descr
 * @property string|null $s10grupos
 * 
 * @property Collection|Sue012[] $sue012s
 *
 * @package App\Models
 */
class Sue010 extends Model
{
	protected $table = 'sue010';
	protected $primaryKey = 's10tipo_liq';
	public $timestamps = false;

	protected $fillable = [
		's10descr',
		's10grupos'
	];

	public function sue012s()
	{
		return $this->hasMany(Sue012::class, 's12tipo_liq');
	}
}
