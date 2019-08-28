<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Атрибуты которые можно массово присваивать
    protected $fillable = [
        'namespace','header','body','code','razdel_id'
    ];

    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах
    public $timestamps = true;
}
