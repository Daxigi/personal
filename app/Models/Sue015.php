<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue015
 * 
 * @property int $s15codliq
 * @property int $s15legajo
 * @property int $s15adic
 * @property float|null $s15importe
 * 
 * @property Sue012 $sue012
 * @property Per001 $per001
 * @property Sue003 $sue003
 *
 * @package App\Models
 */
class Sue015 extends Model
{
	protected $table = 'sue015';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's15codliq' => 'int',
		's15legajo' => 'int',
		's15adic' => 'int',
		's15importe' => 'float'
	];

	protected $fillable = [
		's15importe'
	];

	public function sue012()
	{
		return $this->belongsTo(Sue012::class, 's15codliq');
	}

	public function per001()
	{
		return $this->belongsTo(Per001::class, 's15legajo');
	}

	public function sue003()
	{
		return $this->belongsTo(Sue003::class, 's15adic');
	}
}
