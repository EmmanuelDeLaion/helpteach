<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Storage::makeDirectory('cursos');

        $this->call(UserSeeder::class);

        $this->call(LevelSeeder::class);

        $this->call(CategorySeeder::class);

        $this->call(PriceSeeder::class);

        $this->call(CourseSeeder::class);


    } 
}
