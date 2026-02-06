<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TmpPp
 * 
 * @property int $documento
 * @property string|null $ayn
 * @property string|null $sit_rev
 *
 * @package App\Models
 */
class TmpPp extends Model
{
	protected $table = 'tmp_pp';
	protected $primaryKey = 'documento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'documento' => 'int'
	];

	protected $fillable = [
		'ayn',
		'sit_rev'
	];
}
