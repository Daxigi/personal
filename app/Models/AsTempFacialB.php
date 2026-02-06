<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AsTempFacialB
 * 
 * @property string|null $No
 * @property string|null $TMNo
 * @property string|null $EnNo
 * @property string|null $Name
 * @property string|null $GMNo
 * @property string|null $Mode
 * @property string|null $InOut
 * @property string|null $Antipass
 * @property string|null $ProxyWork
 * @property string|null $DateTime
 *
 * @package App\Models
 */
class AsTempFacialB extends Model
{
	protected $table = 'as_temp_facial_b';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'No',
		'TMNo',
		'EnNo',
		'Name',
		'GMNo',
		'Mode',
		'InOut',
		'Antipass',
		'ProxyWork',
		'DateTime'
	];
}
