<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $pemissions = [
            'roles_create',
            'roles_update',
            'roles_delete',

            'permissions_create',
            'permissions_update',
            'permissions_delete',

            'users_create',
            'users_update',
            'users_delete',
            
            'orders_create',
            'orders_update',
            'orders_delete',
            
            'checkout_create',
            'checkout_update',
            'checkout_delete',
            
            'profiles_create',
            'profiles_update',
            'profiles_delete',

            'products_create',
            'products_store',
            'products_update',
            'products_delete',
            
            'lore_create',
            'lore_update',
            'lore_delete',
        ];

        foreach($pemissions as $permission) {
            Permission::create([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        };

        $role = Role::create(['name' => 'super admin'])
        ->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'admin'])
        ->givePermissionTo([
            'users_create',
            'users_update',
            'users_delete',
            
            'orders_create',
            'orders_update',
            'orders_delete',
            
            'checkout_create',
            'checkout_update',
            'checkout_delete',
            
            'profiles_create',
            'profiles_update',
            'profiles_delete',

            'products_create',
            'products_update',
            'products_delete',
            
            'lore_create',
            'lore_update',
            'lore_delete',
        ]);

        $role = Role::create(['name' => 'customer'])
        ->givePermissionTo([
            'checkout_create',
            'checkout_update',
            'checkout_delete',
            
            'profiles_create',
            'profiles_update',
            'profiles_delete',
        ]);

    }
}
