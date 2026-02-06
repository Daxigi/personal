<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue041Old
 * 
 * @property Carbon $s41fpv
 * @property int $s41mes
 * @property int $s41corr
 * @property float|null $s41gndesde
 * @property float|null $s41gnhasta
 * @property float|null $s41fijo
 * @property float|null $s41porc
 *
 * @package App\Models
 */
class Sue041Old extends Model
{
	protected $table = 'sue041_old';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's41fpv' => 'datetime',
		's41mes' => 'int',
		's41corr' => 'int',
		's41gndesde' => 'float',
		's41gnhasta' => 'float',
		's41fijo' => 'float',
		's41porc' => 'float'
	];

	protected $fillable = [
		's41fpv',
		's41mes',
		's41corr',
		's41gndesde',
		's41gnhasta',
		's41fijo',
		's41porc'
	];
}
