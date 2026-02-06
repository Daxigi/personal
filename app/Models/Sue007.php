<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue007
 * 
 * @property int $s07agrup
 * @property string|null $s07descr
 *
 * @package App\Models
 */
class Sue007 extends Model
{
	protected $table = 'sue007';
	protected $primaryKey = 's07agrup';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's07agrup' => 'int'
	];

	protected $fillable = [
		's07descr'
	];
}
