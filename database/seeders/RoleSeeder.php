<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r_root = Role::create(['name'=>'root']);
        $r_admin = Role::create(['name'=>'admin']);
        $r_user = Role::create(['name' => 'user']);

        Permission::create(['name' => 'general'])->assignRole($r_root);
        Permission::create(['name' => 'crear'])->syncRoles([$r_root, $r_user, $r_admin]);
    }
}
