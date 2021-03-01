<?php

use App\Movie;
use Illuminate\Database\Seeder;

class CreateMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::truncate();
        Movie::create([
            'title' => 'Batman',
            'description' => 'El caballero de la noche'
        ]);
    }
}
