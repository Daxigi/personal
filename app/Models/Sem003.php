<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sem003
 * 
 * @property int $e03legajo
 * @property int $e03cod_emb
 * @property int $e03cor_emb
 * @property int $e03doc_hijo
 * @property string|null $usualta
 * @property Carbon|null $fecalta
 * @property string|null $usumod
 * @property Carbon|null $femod
 * 
 * @property Per001 $per001
 *
 * @package App\Models
 */
class Sem003 extends Model
{
	protected $table = 'sem003';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'e03legajo' => 'int',
		'e03cod_emb' => 'int',
		'e03cor_emb' => 'int',
		'e03doc_hijo' => 'int',
		'fecalta' => 'datetime',
		'femod' => 'datetime'
	];

	protected $fillable = [
		'usualta',
		'fecalta',
		'usumod',
		'femod'
	];

	public function per001()
	{
		return $this->belongsTo(Per001::class, 'e03legajo');
	}
}
