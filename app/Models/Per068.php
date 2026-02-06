<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per068
 * 
 * @property int $p68tipocert
 * @property string|null $p68descr
 * 
 * @property Collection|Per005[] $per005s
 *
 * @package App\Models
 */
class Per068 extends Model
{
	protected $table = 'per068';
	protected $primaryKey = 'p68tipocert';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p68tipocert' => 'int'
	];

	protected $fillable = [
		'p68descr'
	];

	public function per005s()
	{
		return $this->hasMany(Per005::class, 'p05tipocert');
	}
}
