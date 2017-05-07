<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
	protected $fillable = ['name', 'date_of_birth', 'gender', 'email', 'phone', 'address',
		'notes', 'department', 'occupation', 'date_of_joining', 'salary'];

	public function current_groups()
	{
		// $teacher->current_groups
		return $this->hasMany(CurrentGroups::class);
	}

	public function awards()
	{
		// $teacher->awards
		return $this->hasMany(Awards::class);
	}
}
