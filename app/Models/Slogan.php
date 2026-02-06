<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Slogan
 * 
 * @property string $slogan
 *
 * @package App\Models
 */
class Slogan extends Model
{
	protected $table = 'slogan';
	protected $primaryKey = 'slogan';
	public $incrementing = false;
	public $timestamps = false;
}
