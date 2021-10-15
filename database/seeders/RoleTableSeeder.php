<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::Create([
            'name'=>'admin',
            'guard_name'=>'web'
        ]);
        Role::Create([
            'name'=>'merchant',
            'guard_name'=>'web'
        ]);
        Role::Create([
            'name'=>'farmer',
            'guard_name'=>'web'
        ]);
        Role::Create([
            'name'=>'courier',
            'guard_name'=>'web'
        ]);
    }
}
