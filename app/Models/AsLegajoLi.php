<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AsLegajoLi
 * 
 * @property int|null $legajo
 * @property string|null $obs
 *
 * @package App\Models
 */
class AsLegajoLi extends Model
{
	protected $table = 'as_legajo_lis';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'legajo' => 'int'
	];

	protected $fillable = [
		'legajo',
		'obs'
	];
}
