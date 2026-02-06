<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Scm001Her
 * 
 * @property string $c01depresu
 * @property string|null $n_heredera
 * @property string|null $c01leyen
 *
 * @package App\Models
 */
class Scm001Her extends Model
{
	protected $table = 'scm001_her';
	protected $primaryKey = 'c01depresu';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'n_heredera',
		'c01leyen'
	];
}
