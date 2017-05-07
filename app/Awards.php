<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Awards extends Model
{
	public function teacher()
	{
		return $this->belongsTo(Teacher::class);
	}
}
