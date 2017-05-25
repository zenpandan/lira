<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = [
		'name', 
		'description',
		'key',
		'avatar',
		'url',
		'type',
	];

	public function projectType()
	{
		return $this->hasOne('App\Model\ProjectType');
	}
}
