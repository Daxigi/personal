<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per050
 * 
 * @property int $p50codtit
 * @property string $p50nivtit
 * @property int $p50jurtit
 * @property int $p50durtit
 * @property int $p50durliqtit
 * @property int|null $p50jerarquia
 * 
 * @property Per052 $per052
 * @property Collection|Per002[] $per002s
 *
 * @package App\Models
 */
class Per050 extends Model
{
	protected $table = 'per050';
	protected $primaryKey = 'p50codtit';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p50codtit' => 'int',
		'p50jurtit' => 'int',
		'p50durtit' => 'int',
		'p50durliqtit' => 'int',
		'p50jerarquia' => 'int'
	];

	protected $fillable = [
		'p50nivtit',
		'p50jurtit',
		'p50durtit',
		'p50durliqtit',
		'p50jerarquia'
	];

	public function per052()
	{
		return $this->belongsTo(Per052::class, 'p50jurtit');
	}

	public function per002s()
	{
		return $this->hasMany(Per002::class, 'p02codtit');
	}
}
