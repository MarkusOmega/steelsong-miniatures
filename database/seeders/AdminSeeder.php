<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user= User::create([
            'name' => 'Admin', 
            'email' => 'm11severs@gmail.com', 
            'password' => bcrypt('secret'), 
        ]);

        $user->assignRole('super admin');
    }
}
