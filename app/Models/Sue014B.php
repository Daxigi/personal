<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue014B
 * 
 * @property int $s14codliq
 * @property int $s14legajo
 * @property string|null $s14apyn
 * @property Carbon|null $s14fe_ingreso
 * @property int|null $s14sit_rev
 * @property int|null $s14agrup
 * @property int|null $s14nivel
 * @property Carbon|null $s14fe_nov
 * @property float|null $s14depen
 * @property int|null $s14codtit
 * @property int|null $s14dias
 * @property string|null $s14estado
 *
 * @package App\Models
 */
class Sue014B extends Model
{
	protected $table = 'sue014_b';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's14codliq' => 'int',
		's14legajo' => 'int',
		's14fe_ingreso' => 'datetime',
		's14sit_rev' => 'int',
		's14agrup' => 'int',
		's14nivel' => 'int',
		's14fe_nov' => 'datetime',
		's14depen' => 'float',
		's14codtit' => 'int',
		's14dias' => 'int'
	];

	protected $fillable = [
		's14apyn',
		's14fe_ingreso',
		's14sit_rev',
		's14agrup',
		's14nivel',
		's14fe_nov',
		's14depen',
		's14codtit',
		's14dias',
		's14estado'
	];
}
