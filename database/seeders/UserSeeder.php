<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //User::factory()->count(1)->create();

        $user = User::create([
            'name' => 'customer', 
            'email' => 'customer@test.com', 
            'password' => bcrypt('secret'), 
        ]);

        $user->assignRole('customer');
    }
}
