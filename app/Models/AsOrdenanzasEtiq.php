<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AsOrdenanzasEtiq
 * 
 * @property int $id_etiqueta
 * @property string $etiqueta
 *
 * @package App\Models
 */
class AsOrdenanzasEtiq extends Model
{
	protected $table = 'as_ordenanzas_etiq';
	protected $primaryKey = 'id_etiqueta';
	public $timestamps = false;

	protected $fillable = [
		'etiqueta'
	];
}
