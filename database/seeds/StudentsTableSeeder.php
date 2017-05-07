<?php

use Illuminate\Database\Seeder;
use App\Students;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $quantity_clients = rand(80, 90);

	    Students::truncate();

	    factory(Students::class, $quantity_clients)->create();
    }
}
