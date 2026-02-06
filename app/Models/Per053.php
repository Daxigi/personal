<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per053
 * 
 * @property int $p53ambito
 * @property string $p53descr
 * 
 * @property Collection|Per051[] $per051s
 *
 * @package App\Models
 */
class Per053 extends Model
{
	protected $table = 'per053';
	protected $primaryKey = 'p53ambito';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p53ambito' => 'int'
	];

	protected $fillable = [
		'p53descr'
	];

	public function per051s()
	{
		return $this->hasMany(Per051::class, 'p51ambito');
	}
}
