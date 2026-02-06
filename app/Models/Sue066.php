<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue066
 * 
 * @property int $s66anio
 * @property int $s66semestre
 * @property int $s66legajo
 * @property int $s66documento
 * @property float|null $s66hab_c_aporte
 * @property float|null $s66hab_s_aporte
 * @property int|null $s66dias
 *
 * @package App\Models
 */
class Sue066 extends Model
{
	protected $table = 'sue066';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's66anio' => 'int',
		's66semestre' => 'int',
		's66legajo' => 'int',
		's66documento' => 'int',
		's66hab_c_aporte' => 'float',
		's66hab_s_aporte' => 'float',
		's66dias' => 'int'
	];

	protected $fillable = [
		's66documento',
		's66hab_c_aporte',
		's66hab_s_aporte',
		's66dias'
	];
}
