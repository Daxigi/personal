<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue016
 * 
 * @property int $s16cod
 * @property int|null $s16aniod
 * @property int|null $s16anioh
 * @property float|null $s16porc
 *
 * @package App\Models
 */
class Sue016 extends Model
{
	protected $table = 'sue016';
	protected $primaryKey = 's16cod';
	public $timestamps = false;

	protected $casts = [
		's16aniod' => 'int',
		's16anioh' => 'int',
		's16porc' => 'float'
	];

	protected $fillable = [
		's16aniod',
		's16anioh',
		's16porc'
	];
}
