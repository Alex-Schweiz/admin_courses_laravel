<?php

use Illuminate\Database\Seeder;
use App\StudentScores;

class StudentsScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $quantity_clients = rand(45, 50);

	    StudentScores::truncate();

	    factory(StudentScores::class, $quantity_clients)->create();
    }
}
