<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subrogancium
 * 
 * @property int $codliq
 * @property string|null $descr
 * @property string|null $lista
 *
 * @package App\Models
 */
class Subrogancium extends Model
{
	protected $table = 'subrogancia';
	protected $primaryKey = 'codliq';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codliq' => 'int'
	];

	protected $fillable = [
		'descr',
		'lista'
	];
}
