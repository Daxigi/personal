<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue012
 * 
 * @property int $s12codliq
 * @property string|null $s12descr
 * @property int|null $s12anio_liq
 * @property int|null $s12mes_liq
 * @property int|null $s12tipo_liq
 * @property bool|null $s12sac
 * @property Carbon|null $s12fe_cierre
 * @property Carbon|null $s12fe_contab
 * @property bool|null $caja_banco
 * 
 * @property Sue010|null $sue010
 * @property Collection|Neik14[] $neik14s
 * @property Collection|Neik15[] $neik15s
 * @property Collection|Sue014[] $sue014s
 * @property Collection|Sue015[] $sue015s
 * @property Collection|Sue039[] $sue039s
 *
 * @package App\Models
 */
class Sue012 extends Model
{
	protected $table = 'sue012';
	protected $primaryKey = 's12codliq';
	public $timestamps = false;

	protected $casts = [
		's12anio_liq' => 'int',
		's12mes_liq' => 'int',
		's12tipo_liq' => 'int',
		's12sac' => 'bool',
		's12fe_cierre' => 'datetime',
		's12fe_contab' => 'datetime',
		'caja_banco' => 'bool'
	];

	protected $fillable = [
		's12descr',
		's12anio_liq',
		's12mes_liq',
		's12tipo_liq',
		's12sac',
		's12fe_cierre',
		's12fe_contab',
		'caja_banco'
	];

	public function sue010()
	{
		return $this->belongsTo(Sue010::class, 's12tipo_liq');
	}

	public function neik14s()
	{
		return $this->hasMany(Neik14::class, 'n14codliq');
	}

	public function neik15s()
	{
		return $this->hasMany(Neik15::class, 'n15codliq');
	}

	public function sue014s()
	{
		return $this->hasMany(Sue014::class, 's14codliq');
	}

	public function sue015s()
	{
		return $this->hasMany(Sue015::class, 's15codliq');
	}

	public function sue039s()
	{
		return $this->hasMany(Sue039::class, 's39codliq');
	}
}
