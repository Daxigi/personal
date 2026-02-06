<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sueoperador
 * 
 * @property string $operador
 *
 * @package App\Models
 */
class Sueoperador extends Model
{
	protected $table = 'sueoperador';
	protected $primaryKey = 'operador';
	public $incrementing = false;
	public $timestamps = false;
}
