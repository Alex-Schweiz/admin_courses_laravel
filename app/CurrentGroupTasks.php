<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrentGroupTasks extends Model
{
	public function current_group()
	{
		return $this->belongsTo(CurrentGroups::class);
	}
}
