<?php

use Illuminate\Database\Seeder;
use App\Models\Technology;

class Techology extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology::create([
            'technology'=>'Laravel',
        ]);
        Technology::create([
            'technology'=>'JS',
        ]);
        Technology::create([
            'technology'=>'GIT'
        ]);
        Technology::create([
            'technology'=>'Composer',
        ]);
        Technology::create([
            'technology'=>'BASH',
        ]);
        Technology::create([
            'technology'=>'SQL',
        ]);
        Technology::create([
            'technology'=>'Bitrix',
        ]);
    }
}
