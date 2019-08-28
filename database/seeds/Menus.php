<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;

class Menus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create(
            ['name'=>'Home','name_laravel'=>'home','uri'=>'/home','is_admin'=>1,'active'=>1]
         );
        Menu::create(
            ['name'=>'Technology','name_laravel'=>'','uri'=>'/technology','is_admin'=>1,'active'=>1]
        );
        Menu::create(
            ['name'=>'User','name_laravel'=>'user','uri'=>'/user','is_admin'=>1,'active'=>1]
        );
        Menu::create(
            ['name'=>'Exit','name_laravel'=>'exit','uri'=>'/exit','is_admin'=>1,'active'=>1]
        );
    }
}
