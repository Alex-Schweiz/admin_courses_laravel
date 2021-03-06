<?php

use Illuminate\Database\Seeder;
use App\Teacher;
use Faker\Factory;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $quantity_clients = rand(15, 20);

	    Teacher::truncate();

	    factory(Teacher::class, $quantity_clients)->create();
    }
}
