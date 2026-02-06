<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue022
 * 
 * @property int $s22documento
 * @property int $s22dias
 * @property int $s22presen
 *
 * @package App\Models
 */
class Sue022 extends Model
{
	protected $table = 'sue022';
	protected $primaryKey = 's22documento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's22documento' => 'int',
		's22dias' => 'int',
		's22presen' => 'int'
	];

	protected $fillable = [
		's22dias',
		's22presen'
	];
}
