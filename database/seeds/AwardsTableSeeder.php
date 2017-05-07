<?php

use Illuminate\Database\Seeder;
use App\Awards;

class AwardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $quantity_clients = rand(25, 30);

	    Awards::truncate();

	    factory(Awards::class, $quantity_clients)->create();
    }
}
