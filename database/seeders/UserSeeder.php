<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name'=>'Jesus Ramirez Garcia',
            'email'=>'jesus.ramirez9@unmsm.edu.pe',
            'password'=>bcrypt('1234')
            ])->assignRole('Admin');
        User::factory(20)->create();
    }
}
