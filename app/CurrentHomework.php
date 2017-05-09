<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrentHomework extends Model
{
	public function current_group()
	{
		return $this->belongsTo(CurrentGroups::class);
	}
}
