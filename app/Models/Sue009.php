<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue009
 * 
 * @property int $s09grupo
 * @property string|null $s09descr
 * @property string|null $s09sit_rev
 * @property string|null $s09agrup_niv
 *
 * @package App\Models
 */
class Sue009 extends Model
{
	protected $table = 'sue009';
	protected $primaryKey = 's09grupo';
	public $timestamps = false;

	protected $fillable = [
		's09descr',
		's09sit_rev',
		's09agrup_niv'
	];
}
