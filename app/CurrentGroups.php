<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrentGroups extends Model
{
	protected $fillable = ['group_name', 'group_type', 'department', 'start_date', 'finish_date'];

	// $current_group->teacher
	public function teacher()
	{
		return $this->belongsTo(Teacher::class);
	}

	public function students()
	{
		return $this->hasMany(Students::class);
	}

	public function current_homework()
	{
		return $this->hasMany(CurrentHomework::class);
	}

	public function current_group_tasks()
	{
		return $this->hasMany(CurrentGroupTasks::class);
	}
}
