<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue013B
 * 
 * @property int $s13codtit
 * @property float|null $s13porc
 *
 * @package App\Models
 */
class Sue013B extends Model
{
	protected $table = 'sue013_b';
	protected $primaryKey = 's13codtit';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's13codtit' => 'int',
		's13porc' => 'float'
	];

	protected $fillable = [
		's13porc'
	];
}
