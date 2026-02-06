<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue013
 * 
 * @property int $s13codtit
 * @property float|null $s13porc
 *
 * @package App\Models
 */
class Sue013 extends Model
{
	protected $table = 'sue013';
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
