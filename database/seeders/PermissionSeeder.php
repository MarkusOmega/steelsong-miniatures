<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $policies = ['permissions', 'roles', 'users', 'products', 'Content'];

        foreach ($policies as $policy) {
            $actions = ['view', 'create', 'update', 'delete', 'restore'];

            foreach ($actions as $action) {
                DB::table('permissions')->insert([
                    'name' => $policy . '-' . $action,
                    'guard_name' => 'web',
                    'created_at' => now(),
                    'updated_at' => now(), // Including updated_at field to avoid potential issues
                ]);
            }
        }
    }
}
