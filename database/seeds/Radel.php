<?php

use Illuminate\Database\Seeder;
use App\Models\Razdel;

class Radel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Razdel::create([
            'razdel'=>'Миграции',
            'technology_id'=>2,
        ]);
        Razdel::create([
            'razdel'=>'Artisan',
            'technology_id'=>2,
        ]);
        Razdel::create([
            'razdel'=>'DB',
            'technology_id'=>2,
        ]);
        Razdel::create([
            'razdel'=>'SEEDER',
            'technology_id'=>2,
        ]);
        Razdel::create([
            'razdel'=>'Models',
            'technology_id'=>2,
        ]);
        Razdel::create([
            'razdel'=>'Blade',
            'technology_id'=>2,
        ]);
        Razdel::create([
            'razdel'=>'Обработка запросов',
            'technology_id'=>2,
        ]);
        Razdel::create([
        'razdel'=>'Работа с файлами',
        'technology_id'=>2,
        ]);
        Razdel::create([
            'razdel'=>'Валидация форм',
            'technology_id'=>2,
        ]);
        Razdel::create([
            'razdel'=>'Работа с роутингом',
            'technology_id'=>2,
        ]);
        Razdel::create([
            'razdel'=>'МОДЕЛИ:ОТНОШЕНИЯ (СВЯЗИ)',
            'technology_id'=>2,
        ]);
        Razdel::create([
            'razdel'=>' Ресурс Контроль',
            'technology_id'=>2,
        ]);
        Razdel::create([
            'razdel'=>'Авторизация',
            'technology_id'=>2,
        ]);
        Razdel::create([
            'razdel'=>'Работа с сессиями',
            'technology_id'=>2,
        ]);
        Razdel::create([
            'razdel'=>'Intervention',
            'technology_id'=>2,
        ]);
    }
}
