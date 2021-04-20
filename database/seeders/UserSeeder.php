<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jesus Emmanuel de Leon Lerma',
            'control_number' => '1701F01633',
            'password' => bcrypt('12345678'),
        ]);

        
    }
}
