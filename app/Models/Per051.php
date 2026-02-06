<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per051
 * 
 * @property int $p51codorgtit
 * @property string $p51nombreorg
 * @property int $p51jurorg
 * @property int $p51ambito
 * 
 * @property Per052 $per052
 * @property Per053 $per053
 * @property Collection|Per002[] $per002s
 *
 * @package App\Models
 */
class Per051 extends Model
{
	protected $table = 'per051';
	protected $primaryKey = 'p51codorgtit';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p51codorgtit' => 'int',
		'p51jurorg' => 'int',
		'p51ambito' => 'int'
	];

	protected $fillable = [
		'p51nombreorg',
		'p51jurorg',
		'p51ambito'
	];

	public function per052()
	{
		return $this->belongsTo(Per052::class, 'p51jurorg');
	}

	public function per053()
	{
		return $this->belongsTo(Per053::class, 'p51ambito');
	}

	public function per002s()
	{
		return $this->hasMany(Per002::class, 'p02codorgtit');
	}
}
