<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue044
 * 
 * @property int $s44documento
 * @property int $s44correl
 * @property int|null $s44rubro
 * @property string|null $s44denominacion
 * @property float|null $s44importe
 * @property Carbon|null $s44fedesde
 * @property Carbon|null $s44fehasta
 *
 * @package App\Models
 */
class Sue044 extends Model
{
	protected $table = 'sue044';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's44documento' => 'int',
		's44correl' => 'int',
		's44rubro' => 'int',
		's44importe' => 'float',
		's44fedesde' => 'datetime',
		's44fehasta' => 'datetime'
	];

	protected $fillable = [
		's44rubro',
		's44denominacion',
		's44importe',
		's44fedesde',
		's44fehasta'
	];
}
