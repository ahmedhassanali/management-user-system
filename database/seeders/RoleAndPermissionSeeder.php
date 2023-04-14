<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermissions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'update_users',
            'create_users',
            'delete_users',
            'show_users',

            'create_roles',
            'update_roles',
            'delete_roles',
            'show_roles',

            'create_products',
            'update_products',
            'delete_products',
            'show_products',

            'create_sliders',
            'update_sliders',
            'delete_sliders',
            'show_sliders',

            'create_categories',
            'update_categories',
            'delete_categories',
            'show_categories',

            'show_settings',
        ];
        $adminRole = Role::create(['name' => 'admin']);

        foreach($permissions as $permission){
            $permision = Permission::create(['name' => $permission]);

            RolePermissions::create([
                'role_id' => $adminRole->id,
                'permission_id' => $permision->id
            ]);
        };

    }
}
