<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue026
 * 
 * @property Carbon $s26fpv
 * @property int $s26agrup
 * @property int $s26nivel
 * @property float|null $s26base
 * @property float|null $s26compl
 *
 * @package App\Models
 */
class Sue026 extends Model
{
	protected $table = 'sue026';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's26fpv' => 'datetime',
		's26agrup' => 'int',
		's26nivel' => 'int',
		's26base' => 'float',
		's26compl' => 'float'
	];

	protected $fillable = [
		's26base',
		's26compl'
	];
}
