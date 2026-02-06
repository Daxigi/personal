<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sem005
 * 
 * @property string|null $cbu
 * @property string|null $tipodoc
 * @property int|null $nrodoc
 * @property string|null $denominacion
 * @property int|null $nrocuenta
 *
 * @package App\Models
 */
class Sem005 extends Model
{
	protected $table = 'sem005';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nrodoc' => 'int',
		'nrocuenta' => 'int'
	];

	protected $fillable = [
		'cbu',
		'tipodoc',
		'nrodoc',
		'denominacion',
		'nrocuenta'
	];
}
