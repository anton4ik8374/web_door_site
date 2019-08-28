<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Models\Role::create([
            'name'=>'Admin',
            'slug'=>'admin',
            'permissions'=> ['admin'=>true,'granduser'=>true]
        ]);
        $user = \App\Models\Role::create([
            'name'=>'User',
            'slug'=>'user',
            'permissions'=>['user'=>true,'granduser'=>false]
        ]);
    }
}
