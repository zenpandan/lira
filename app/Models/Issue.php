<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
	protected $fillable = [
		'summary',
		'description',
		'reporter',
		'assignee'
	];

	public function projects()
	{
		return $this->belongsToMany('App\Models\Project', 'issue_project');
	}


}
