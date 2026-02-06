<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lr9Migration
 * 
 * @property int $id
 * @property string $migration
 * @property int $batch
 *
 * @package App\Models
 */
class Lr9Migration extends Model
{
	protected $table = 'lr9_migrations';
	public $timestamps = false;

	protected $casts = [
		'batch' => 'int'
	];

	protected $fillable = [
		'migration',
		'batch'
	];
}
