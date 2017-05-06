<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrentGroups extends Model
{
	// $current_group->teacher

	public function teacher()
	{
		return $this->belongsTo(Teacher::class);
	}
}
