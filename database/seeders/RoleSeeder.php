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

        $customer = Role::create(['name' => 'Customer']);
        $support = Role::create(['name' => 'Support']);
        $permissions = Permission::findMany([1,2,3,4]);
        $support->syncPermissions($permissions);
    }
}
