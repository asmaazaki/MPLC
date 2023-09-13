<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Admin\Entities\Admin;
use Spatie\Permission\Models\Permission;

class CreatePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $permissions=['about_us','solutions','services','vendors_experties','users'];
       foreach($permissions as $permission){

           Permission::updateOrCreate(['name'=>$permission,'guard_name'=>'admin'],['name'=>$permission,'guard_name'=>'admin']);
       }
    }
}