<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentScores extends Model
{
	public function students()
	{
		return $this->belongsTo(Students::class);
	}
}
