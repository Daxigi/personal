<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Neik01
 * 
 * @property int $nk1legajo
 * @property int $nk1tipodoc
 * @property int $nk1docum
 * @property string $nk1apyn
 * @property string $nk1sexo
 * @property Carbon|null $nk1fenac
 * @property string|null $nk1locnac
 * @property int|null $nk1idpcianac
 * @property string $nk1paisnac
 * @property Carbon|null $nk1feadonac
 * @property int|null $nk1codbadom
 * @property int|null $nk1codcadom
 * @property int|null $nk1nropudom
 * @property string|null $nk1locdom
 * @property int|null $nk1idpciadom
 * @property string|null $nk1telefono
 * @property string|null $nk1email
 * @property string|null $nk1estcivil
 * @property bool|null $nk1otroingreso
 * @property string|null $nk1actextra
 * @property string $nk1tipoestudio
 * @property string|null $nk1titulo
 * @property bool|null $nk1estudiante
 * @property string|null $nk1carrera
 * @property int|null $nk1anio_car
 * @property Carbon|null $nk1fe_act_car
 * @property string $nk1con_info
 * @property string|null $nk1descr_otro_oficio
 * @property string|null $nk1cursos
 * @property string $nk1usualta
 * @property Carbon|null $nk1fealta
 * @property string $nk1usumod
 * @property Carbon|null $nk1femod
 * @property string|null $nk1pisodptodom
 * @property string|null $nk1dom_libre
 * @property int|null $nk1tipo
 * @property bool|null $nk1obra_social
 * @property string|null $nk1observaciones_os
 * @property int|null $nk1_tiene_discapacidad
 * @property int|null $nk1_tiene_cud
 * @property int|null $nk1_numero_cud
 * @property Carbon|null $nk1_fecha_censo_2019
 * @property Carbon|null $nk1_imprimir_censo_2019
 * @property int|null $nk1_id_tipo_disca
 * @property bool|null $nk1_censado_2019
 * @property string|null $nk1_celular
 * @property string|null $nk1leyenda
 * @property int|null $nk1nrocuil
 * @property int|null $nk1restocuil
 * @property string|null $imag_neike
 * @property int|null $nk1_subcad
 * @property string|null $cbu_cvu
 * @property string|null $cbu_nro
 * @property int|null $nivel
 * 
 * @property Collection|Neik10Liquidacione[] $neik10_liquidaciones
 * @property Collection|Neik07Adicionale[] $neik07_adicionales
 * @property Collection|Neik03[] $neik03s
 * @property Collection|Neik14[] $neik14s
 * @property Collection|Neik15[] $neik15s
 * @property Collection|Neik55[] $neik55s
 * @property Collection|Neik04Monto[] $neik04_montos
 * @property Collection|Neik05Certificacion[] $neik05_certificacions
 * @property Collection|Neik08Embargo[] $neik08_embargos
 *
 * @package App\Models
 */
class Neik01 extends Model
{
	protected $table = 'neik01';
	protected $primaryKey = 'nk1legajo';
	public $timestamps = false;

	protected $casts = [
		'nk1tipodoc' => 'int',
		'nk1docum' => 'int',
		'nk1fenac' => 'datetime',
		'nk1idpcianac' => 'int',
		'nk1feadonac' => 'datetime',
		'nk1codbadom' => 'int',
		'nk1codcadom' => 'int',
		'nk1nropudom' => 'int',
		'nk1idpciadom' => 'int',
		'nk1otroingreso' => 'bool',
		'nk1estudiante' => 'bool',
		'nk1anio_car' => 'int',
		'nk1fe_act_car' => 'datetime',
		'nk1fealta' => 'datetime',
		'nk1femod' => 'datetime',
		'nk1tipo' => 'int',
		'nk1obra_social' => 'bool',
		'nk1_tiene_discapacidad' => 'int',
		'nk1_tiene_cud' => 'int',
		'nk1_numero_cud' => 'int',
		'nk1_fecha_censo_2019' => 'datetime',
		'nk1_imprimir_censo_2019' => 'datetime',
		'nk1_id_tipo_disca' => 'int',
		'nk1_censado_2019' => 'bool',
		'nk1nrocuil' => 'int',
		'nk1restocuil' => 'int',
		'nk1_subcad' => 'int',
		'nivel' => 'int'
	];

	protected $fillable = [
		'nk1tipodoc',
		'nk1docum',
		'nk1apyn',
		'nk1sexo',
		'nk1fenac',
		'nk1locnac',
		'nk1idpcianac',
		'nk1paisnac',
		'nk1feadonac',
		'nk1codbadom',
		'nk1codcadom',
		'nk1nropudom',
		'nk1locdom',
		'nk1idpciadom',
		'nk1telefono',
		'nk1email',
		'nk1estcivil',
		'nk1otroingreso',
		'nk1actextra',
		'nk1tipoestudio',
		'nk1titulo',
		'nk1estudiante',
		'nk1carrera',
		'nk1anio_car',
		'nk1fe_act_car',
		'nk1con_info',
		'nk1descr_otro_oficio',
		'nk1cursos',
		'nk1usualta',
		'nk1fealta',
		'nk1usumod',
		'nk1femod',
		'nk1pisodptodom',
		'nk1dom_libre',
		'nk1tipo',
		'nk1obra_social',
		'nk1observaciones_os',
		'nk1_tiene_discapacidad',
		'nk1_tiene_cud',
		'nk1_numero_cud',
		'nk1_fecha_censo_2019',
		'nk1_imprimir_censo_2019',
		'nk1_id_tipo_disca',
		'nk1_censado_2019',
		'nk1_celular',
		'nk1leyenda',
		'nk1nrocuil',
		'nk1restocuil',
		'imag_neike',
		'nk1_subcad',
		'cbu_cvu',
		'cbu_nro',
		'nivel'
	];

	public function neik10_liquidaciones()
	{
		return $this->hasMany(Neik10Liquidacione::class, 'nk10legajo');
	}

	public function neik07_adicionales()
	{
		return $this->hasMany(Neik07Adicionale::class, 'nk7legajo');
	}

	public function neik03s()
	{
		return $this->hasMany(Neik03::class, 'nk3legajo');
	}

	public function neik14s()
	{
		return $this->hasMany(Neik14::class, 'n14legajo');
	}

	public function neik15s()
	{
		return $this->hasMany(Neik15::class, 'n15legajo');
	}

	public function neik55s()
	{
		return $this->hasMany(Neik55::class, 'n05legajo');
	}

	public function neik04_montos()
	{
		return $this->hasMany(Neik04Monto::class, 'nk4legajo');
	}

	public function neik05_certificacions()
	{
		return $this->hasMany(Neik05Certificacion::class, 'nk5legajo');
	}

	public function neik08_embargos()
	{
		return $this->hasMany(Neik08Embargo::class, 'nk8legajo');
	}
}
