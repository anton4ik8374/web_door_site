<?php

use Illuminate\Database\Seeder;
Use App\Models\Dsta;
class Data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dsta::create([
            'razdel'=>'Миграции',
            'technology_id'=>2,
        ]);
        Dsta::create([
            'razdel'=>'Artisan',
            'technology_id'=>2,
        ]);
        Dsta::create([
            'razdel'=>'DB',
            'technology_id'=>2,
        ]);
        Dsta::create([
            'razdel'=>'SEEDER',
            'technology_id'=>2,
        ]);
        Dsta::create([
            'razdel'=>'Models',
            'technology_id'=>2,
        ]);
        Dsta::create([
            'razdel'=>'Blade',
            'technology_id'=>2,
        ]);
        Dsta::create([
            'razdel'=>'ОБРАБОТКА ЗАПРОСА',
            'technology_id'=>2,
        ]);
        Dsta::create([
            'razdel'=>'ОБРАБОТКА ЗАПРОСА',
            'technology_id'=>2,
        ]);
    }
}
