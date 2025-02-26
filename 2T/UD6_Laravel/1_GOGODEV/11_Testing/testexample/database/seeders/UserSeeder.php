<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creamos 4 usuario uno se debe llamar Alejandro
       User::factory()->create([
            'name' => 'Alejandro',
        ]);
       User::factory(3)->create();
    }
}
