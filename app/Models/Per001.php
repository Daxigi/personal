<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Per001
 * 
 * @property int $p01legajo
 * @property int|null $p01tipodoc
 * @property int $p01docum
 * @property string $p01apyn
 * @property string $p01sexo
 * @property Carbon|null $p01fenac
 * @property string|null $p01locnac
 * @property int|null $p01idpcianac
 * @property string|null $p01paisnac
 * @property Carbon|null $p01feadonac
 * @property string|null $p01locdom
 * @property int|null $p01idpciadom
 * @property string|null $p01estcivil
 * @property string|null $p01usualta
 * @property Carbon|null $p01fealta
 * @property string|null $p01usumod
 * @property Carbon|null $p01femod
 * @property string|null $p01email
 * @property string|null $p01comentarios
 * @property string|null $p01domicilio
 * @property int|null $p01nrocuil
 * @property int|null $p01restocuil
 * @property int|null $id_anexo_ubi
 * @property string|null $telefono
 * 
 * @property Collection|AsNovedade[] $as_novedades
 * @property Collection|AsOficialSalida[] $as_oficial_salidas
 * @property Collection|AsPersonalAutorizadoExtra[] $as_personal_autorizado_extras
 * @property Collection|AsTardanza[] $as_tardanzas
 * @property Collection|Per009[] $per009s
 * @property Collection|Articulo[] $articulos
 * @property Collection|AsFerium[] $as_feria
 * @property Collection|AsCompensatorio[] $as_compensatorios
 * @property Collection|AsHorasExtra[] $as_horas_extras
 * @property Collection|AsLegajoGch[] $as_legajo_gches
 * @property Collection|Per002[] $per002s
 * @property Collection|PerDocLegajo[] $per_doc_legajos
 * @property Collection|Per003[] $per003s
 * @property Collection|Per005[] $per005s
 * @property Collection|Per008[] $per008s
 * @property Collection|Per010[] $per010s
 * @property Collection|Sem002[] $sem002s
 * @property Collection|Sem001[] $sem001s
 * @property Collection|Sem003[] $sem003s
 * @property Collection|Sue024[] $sue024s
 * @property Collection|Sem004[] $sem004s
 * @property Collection|Sue005[] $sue005s
 * @property Collection|Sue014[] $sue014s
 * @property Collection|Sue015[] $sue015s
 * @property Collection|Sue023[] $sue023s
 * @property Collection|Sue033[] $sue033s
 * @property Collection|Per004[] $per004s
 * @property Collection|AsVacacione[] $as_vacaciones
 *
 * @package App\Models
 */
class Per001 extends Model
{
	protected $table = 'per001';
	protected $primaryKey = 'p01legajo';
	public $timestamps = false;

	protected $casts = [
		'p01tipodoc' => 'int',
		'p01docum' => 'int',
		'p01fenac' => 'datetime',
		'p01idpcianac' => 'int',
		'p01feadonac' => 'datetime',
		'p01idpciadom' => 'int',
		'p01fealta' => 'datetime',
		'p01femod' => 'datetime',
		'p01nrocuil' => 'int',
		'p01restocuil' => 'int',
		'id_anexo_ubi' => 'int'
	];

	protected $fillable = [
		'p01tipodoc',
		'p01docum',
		'p01apyn',
		'p01sexo',
		'p01fenac',
		'p01locnac',
		'p01idpcianac',
		'p01paisnac',
		'p01feadonac',
		'p01locdom',
		'p01idpciadom',
		'p01estcivil',
		'p01usualta',
		'p01fealta',
		'p01usumod',
		'p01femod',
		'p01email',
		'p01comentarios',
		'p01domicilio',
		'p01nrocuil',
		'p01restocuil',
		'id_anexo_ubi',
		'telefono'
	];

	public function as_novedades()
	{
		return $this->hasMany(AsNovedade::class, 'p01legajo');
	}

	public function as_oficial_salidas()
	{
		return $this->hasMany(AsOficialSalida::class, 'legajo');
	}

	public function as_personal_autorizado_extras()
	{
		return $this->hasMany(AsPersonalAutorizadoExtra::class, 'legajo');
	}

	public function as_tardanzas()
	{
		return $this->hasMany(AsTardanza::class, 'legajo');
	}

	public function per009s()
	{
		return $this->hasMany(Per009::class, 'p09legajo');
	}

	public function articulos()
	{
		return $this->hasMany(Articulo::class, 'legajo');
	}

	public function as_feria()
	{
		return $this->hasMany(AsFerium::class, 'p01legajo');
	}

	public function as_compensatorios()
	{
		return $this->hasMany(AsCompensatorio::class, 'legajo');
	}

	public function as_horas_extras()
	{
		return $this->hasMany(AsHorasExtra::class, 'legajo');
	}

	public function as_legajo_gches()
	{
		return $this->hasMany(AsLegajoGch::class, 'p01legajo');
	}

	public function per002s()
	{
		return $this->hasMany(Per002::class, 'p02legajo');
	}

	public function per_doc_legajos()
	{
		return $this->hasMany(PerDocLegajo::class, 'legajo');
	}

	public function per003s()
	{
		return $this->hasMany(Per003::class, 'p03legajo');
	}

	public function per005s()
	{
		return $this->hasMany(Per005::class, 'p05legajo');
	}

	public function per008s()
	{
		return $this->hasMany(Per008::class, 'p08legajo');
	}

	public function per010s()
	{
		return $this->hasMany(Per010::class, 'p10legajo');
	}

	public function sem002s()
	{
		return $this->hasMany(Sem002::class, 'e02legajo');
	}

	public function sem001s()
	{
		return $this->hasMany(Sem001::class, 'e01legajo');
	}

	public function sem003s()
	{
		return $this->hasMany(Sem003::class, 'e03legajo');
	}

	public function sue024s()
	{
		return $this->hasMany(Sue024::class, 's24legajo');
	}

	public function sem004s()
	{
		return $this->hasMany(Sem004::class, 'e04legajo');
	}

	public function sue005s()
	{
		return $this->hasMany(Sue005::class, 's05legajo');
	}

	public function sue014s()
	{
		return $this->hasMany(Sue014::class, 's14legajo');
	}

	public function sue015s()
	{
		return $this->hasMany(Sue015::class, 's15legajo');
	}

	public function sue023s()
	{
		return $this->hasMany(Sue023::class, 's23legajo');
	}

	public function sue033s()
	{
		return $this->hasMany(Sue033::class, 's33legajo');
	}

	public function per004s()
	{
		return $this->hasMany(Per004::class, 'p04legajo');
	}

	public function as_vacaciones()
	{
		return $this->hasMany(AsVacacione::class, 'legajo');
	}
}
