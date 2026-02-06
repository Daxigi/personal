<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per002
 * 
 * @property int $p02id
 * @property int $p02legajo
 * @property int $p02codtit
 * @property string $p02titulo
 * @property int $p02codorgtit
 * @property Carbon $p02feobttit
 * @property string|null $p02comtit
 * @property bool|null $p02flagliqtit
 * @property string|null $p02usualta
 * @property Carbon|null $p02fealta
 * @property string|null $p02usumod
 * @property Carbon|null $p02femod
 * 
 * @property Per001 $per001
 * @property Per050 $per050
 * @property Per051 $per051
 *
 * @package App\Models
 */
class Per002 extends Model
{
	protected $table = 'per002';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p02id' => 'int',
		'p02legajo' => 'int',
		'p02codtit' => 'int',
		'p02codorgtit' => 'int',
		'p02feobttit' => 'datetime',
		'p02flagliqtit' => 'bool',
		'p02fealta' => 'datetime',
		'p02femod' => 'datetime'
	];

	protected $fillable = [
		'p02codtit',
		'p02titulo',
		'p02codorgtit',
		'p02feobttit',
		'p02comtit',
		'p02flagliqtit',
		'p02usualta',
		'p02fealta',
		'p02usumod',
		'p02femod'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'p02legajo');
	}

	public function per050()
	{
		return $this->belongsTo(Per050::class, 'p02codtit');
	}

	public function per051()
	{
		return $this->belongsTo(Per051::class, 'p02codorgtit');
	}
}
