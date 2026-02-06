<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue023
 * 
 * @property Carbon $s23fpv
 * @property int $s23legajo
 * @property int $s23documento
 * @property float|null $s23capital
 * 
 * @property Per001 $per001
 *
 * @package App\Models
 */
class Sue023 extends Model
{
	protected $table = 'sue023';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's23fpv' => 'datetime',
		's23legajo' => 'int',
		's23documento' => 'int',
		's23capital' => 'float'
	];

	protected $fillable = [
		's23documento',
		's23capital'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 's23legajo');
	}
}
