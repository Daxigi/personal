<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per067
 * 
 * @property int $p67tipo_seg
 * @property string $p67descr
 * 
 * @property Collection|Per010[] $per010s
 *
 * @package App\Models
 */
class Per067 extends Model
{
	protected $table = 'per067';
	protected $primaryKey = 'p67tipo_seg';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p67tipo_seg' => 'int'
	];

	protected $fillable = [
		'p67descr'
	];

	public function per010s()
	{
		return $this->hasMany(Per010::class, 'p10tipo_seguro');
	}
}
