<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sue033
 * 
 * @property int $s33anio
 * @property int $s33semestre
 * @property int $s33legajo
 * @property int $s33documento
 * @property float|null $s33hab_c_aporte
 * @property float|null $s33hab_s_aporte
 * @property int|null $s33dias
 * 
 * @property Per001 $per001
 *
 * @package App\Models
 */
class Sue033 extends Model
{
	protected $table = 'sue033';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		's33anio' => 'int',
		's33semestre' => 'int',
		's33legajo' => 'int',
		's33documento' => 'int',
		's33hab_c_aporte' => 'float',
		's33hab_s_aporte' => 'float',
		's33dias' => 'int'
	];

	protected $fillable = [
		's33documento',
		's33hab_c_aporte',
		's33hab_s_aporte',
		's33dias'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 's33legajo');
	}
}
