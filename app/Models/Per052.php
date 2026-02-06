<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per052
 * 
 * @property int $p52jur
 * @property string $p52descr
 * 
 * @property Collection|Per051[] $per051s
 * @property Collection|Per050[] $per050s
 *
 * @package App\Models
 */
class Per052 extends Model
{
	protected $table = 'per052';
	protected $primaryKey = 'p52jur';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p52jur' => 'int'
	];

	protected $fillable = [
		'p52descr'
	];

	public function per051s()
	{
		return $this->hasMany(Per051::class, 'p51jurorg');
	}

	public function per050s()
	{
		return $this->hasMany(Per050::class, 'p50jurtit');
	}
}
