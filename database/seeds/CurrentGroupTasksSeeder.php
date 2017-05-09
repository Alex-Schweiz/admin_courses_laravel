<?php

use Illuminate\Database\Seeder;
use App\CurrentGroupTasks;

class CurrentGroupTasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $quantity_clients = rand(120, 130);

	    CurrentGroupTasks::truncate();

	    factory(CurrentGroupTasks::class, $quantity_clients)->create();
    }
}
