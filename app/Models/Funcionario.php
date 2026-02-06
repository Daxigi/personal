<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Funcionario
 * 
 * @property int $f_documento
 *
 * @package App\Models
 */
class Funcionario extends Model
{
	protected $table = 'funcionarios';
	protected $primaryKey = 'f_documento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'f_documento' => 'int'
	];
}
