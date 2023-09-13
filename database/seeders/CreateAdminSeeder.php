<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Admin\Entities\Admin;
use Spatie\Permission\Models\Permission;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $admin= Admin::updateOrCreate([
            'email' => 'admin@admin.com',
        ],[
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'admin123'
        ]);
        $all_permission=Permission::pluck('name')->toArray();
        $admin->syncPermissions($all_permission);
    }
}
