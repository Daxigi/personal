<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue037
 * 
 * @property int $s37legajo
 * @property int $s37docum
 * @property int|null $s37dias
 * @property float|null $s37presen
 *
 * @package App\Models
 */
class Sue037 extends Model
{
	protected $table = 'sue037';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's37legajo' => 'int',
		's37docum' => 'int',
		's37dias' => 'int',
		's37presen' => 'float'
	];

	protected $fillable = [
		's37dias',
		's37presen'
	];
}
