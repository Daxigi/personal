<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik15
 * 
 * @property int $n15codliq
 * @property int $n15legajo
 * @property int $n15adic
 * @property float|null $n15importe
 * 
 * @property Sue012 $sue012
 * @property Neik01 $neik01
 * @property Sue003 $sue003
 *
 * @package App\Models
 */
class Neik15 extends Model
{
	protected $table = 'neik15';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'n15codliq' => 'int',
		'n15legajo' => 'int',
		'n15adic' => 'int',
		'n15importe' => 'float'
	];

	protected $fillable = [
		'n15importe'
	];

	public function sue012()
	{
		return $this->belongsTo(Sue012::class, 'n15codliq');
	}

	public function neik01()
	{
		return $this->belongsTo(Neik01::class, 'n15legajo');
	}

	public function sue003()
	{
		return $this->belongsTo(Sue003::class, 'n15adic');
	}
}
