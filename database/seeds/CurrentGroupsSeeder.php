<?php

use Illuminate\Database\Seeder;
use App\CurrentGroups;

class CurrentGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $quantity_clients = rand(35, 40);

	    CurrentGroups::truncate();

	    factory(CurrentGroups::class, $quantity_clients)->create();
    }
}
