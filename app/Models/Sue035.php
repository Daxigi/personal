<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue035
 * 
 * @property int $s35legajo
 * @property int $s35docum
 * @property Carbon|null $s35fepres
 * @property int|null $s35mesliq
 *
 * @package App\Models
 */
class Sue035 extends Model
{
	protected $table = 'sue035';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's35legajo' => 'int',
		's35docum' => 'int',
		's35fepres' => 'datetime',
		's35mesliq' => 'int'
	];

	protected $fillable = [
		's35fepres',
		's35mesliq'
	];
}
