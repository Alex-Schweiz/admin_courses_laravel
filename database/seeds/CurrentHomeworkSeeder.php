<?php

use Illuminate\Database\Seeder;
use App\CurrentHomework;

class CurrentHomeworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $quantity_clients = rand(70, 90);

	    CurrentHomework::truncate();

	    factory(CurrentHomework::class, $quantity_clients)->create();
    }
}
