<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CreateAdminSeeder;
use Modules\Common\Database\Seeders\SettingsTableSeeder;
use Database\Seeders\ClientsTableSeeder;
use Database\Seeders\BranchesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call(CreatePermissionSeeder::class);
       $this->call(CreateAdminSeeder::class);
       $this->call(SettingsTableSeeder::class);

    }
}
