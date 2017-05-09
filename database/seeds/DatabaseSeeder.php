<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
	    $this->call(TeachersTableSeeder::class);
	    $this->call(CurrentGroupsSeeder::class);
	    $this->call(AwardsTableSeeder::class);
	    $this->call(StudentsTableSeeder::class);
	    $this->call(CurrentHomeworkSeeder::class);
	    $this->call(CurrentGroupTasksSeeder::class);
	    $this->call(StudentsScoreSeeder::class);
    }
}
