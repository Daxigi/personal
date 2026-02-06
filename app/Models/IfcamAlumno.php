<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IfcamAlumno
 * 
 * @property int $id_alumno
 * @property int|null $id_curso
 * @property int|null $documento
 * @property string|null $apyn
 * @property string|null $observaciones
 * @property string|null $muni
 * @property string|null $estado
 * 
 * @property IfcamCurso|null $ifcam_curso
 *
 * @package App\Models
 */
class IfcamAlumno extends Model
{
	protected $table = 'ifcam_alumnos';
	protected $primaryKey = 'id_alumno';
	public $timestamps = false;

	protected $casts = [
		'id_curso' => 'int',
		'documento' => 'int'
	];

	protected $fillable = [
		'id_curso',
		'documento',
		'apyn',
		'observaciones',
		'muni',
		'estado'
	];

	public function ifcam_curso()
	{
		return $this->belongsTo(IfcamCurso::class, 'id_curso');
	}
}
