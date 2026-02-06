<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue003
 * 
 * @property int $s03adic
 * @property string|null $s03descr
 * @property bool|null $s03remunerativo
 * @property int|null $s03valor_asoc
 * @property string $s03tipoad
 * @property bool|null $s03salario
 * @property int|null $s03orden
 * @property bool|null $s03acum_sal
 * @property bool|null $s03acum_garant
 * @property bool|null $s03sac
 * @property bool|null $s03ganancia
 * 
 * @property Collection|Neik15[] $neik15s
 * @property Collection|Neik55[] $neik55s
 * @property Collection|Sue005[] $sue005s
 * @property Collection|Sue015[] $sue015s
 * @property Collection|Sue017[] $sue017s
 * @property Collection|Sue045[] $sue045s
 *
 * @package App\Models
 */
class Sue003 extends Model
{
	protected $table = 'sue003';
	protected $primaryKey = 's03adic';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's03adic' => 'int',
		's03remunerativo' => 'bool',
		's03valor_asoc' => 'int',
		's03salario' => 'bool',
		's03orden' => 'int',
		's03acum_sal' => 'bool',
		's03acum_garant' => 'bool',
		's03sac' => 'bool',
		's03ganancia' => 'bool'
	];

	protected $fillable = [
		's03descr',
		's03remunerativo',
		's03valor_asoc',
		's03tipoad',
		's03salario',
		's03orden',
		's03acum_sal',
		's03acum_garant',
		's03sac',
		's03ganancia'
	];

	public function neik15s()
	{
		return $this->hasMany(Neik15::class, 'n15adic');
	}

	public function neik55s()
	{
		return $this->hasMany(Neik55::class, 'n05adic');
	}

	public function sue005s()
	{
		return $this->hasMany(Sue005::class, 's05adic');
	}

	public function sue015s()
	{
		return $this->hasMany(Sue015::class, 's15adic');
	}

	public function sue017s()
	{
		return $this->hasMany(Sue017::class, 's17adic');
	}

	public function sue045s()
	{
		return $this->hasMany(Sue045::class, 's45adic');
	}
}
