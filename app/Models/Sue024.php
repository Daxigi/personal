<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue024
 * 
 * @property Carbon $s24fpv
 * @property int $s24legajo
 * @property int $s24agrup
 * @property int $s24nivel
 * @property string|null $s24documento
 * @property Carbon|null $s24fefin
 * 
 * @property Per001 $per001
 *
 * @package App\Models
 */
class Sue024 extends Model
{
	protected $table = 'sue024';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's24fpv' => 'datetime',
		's24legajo' => 'int',
		's24agrup' => 'int',
		's24nivel' => 'int',
		's24fefin' => 'datetime'
	];

	protected $fillable = [
		's24agrup',
		's24nivel',
		's24documento',
		's24fefin'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 's24legajo');
	}
}
