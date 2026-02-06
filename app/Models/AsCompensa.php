<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AsCompensa
 * 
 * @property float $documento
 * @property string|null $descrip
 *
 * @package App\Models
 */
class AsCompensa extends Model
{
	protected $table = 'as_compensa';
	protected $primaryKey = 'documento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'documento' => 'float'
	];

	protected $fillable = [
		'descrip'
	];
}
