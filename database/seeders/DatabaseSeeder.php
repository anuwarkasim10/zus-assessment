<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PermissionTableSeeder;
use Database\Seeders\CreateSuperAdminAndOrganizerSeeder;
use Database\Seeders\RoleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            PermissionTableSeeder::class,
            CreateSuperAdminAndOrganizerSeeder::class,
            RoleSeeder::class,
            TagSeeder::class
        ]);
    }
}
