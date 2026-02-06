<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per056
 * 
 * @property int $p56adicional
 * @property string|null $p56descr
 * @property string|null $p56usualta
 * @property Carbon|null $p56fealta
 * @property string|null $p56usumod
 * @property Carbon|null $p56femod
 * @property bool|null $p56remunerativo
 * @property bool|null $p56asoc_escala
 * @property string $p56tipoad
 * @property bool|null $p56salario
 * 
 * @property Collection|Per007[] $per007s
 * @property Collection|Per008[] $per008s
 * @property Collection|Per058[] $per058s
 *
 * @package App\Models
 */
class Per056 extends Model
{
	protected $table = 'per056';
	protected $primaryKey = 'p56adicional';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'p56adicional' => 'int',
		'p56fealta' => 'datetime',
		'p56femod' => 'datetime',
		'p56remunerativo' => 'bool',
		'p56asoc_escala' => 'bool',
		'p56salario' => 'bool'
	];

	protected $fillable = [
		'p56descr',
		'p56usualta',
		'p56fealta',
		'p56usumod',
		'p56femod',
		'p56remunerativo',
		'p56asoc_escala',
		'p56tipoad',
		'p56salario'
	];

	public function per007s()
	{
		return $this->hasMany(Per007::class, 'p07adicional');
	}

	public function per008s()
	{
		return $this->hasMany(Per008::class, 'p08adicional');
	}

	public function per058s()
	{
		return $this->hasMany(Per058::class, 'p58adicional');
	}
}
