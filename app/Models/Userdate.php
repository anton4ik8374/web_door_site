<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userdate extends Model
{
    //Атрибуты которые можно массово присваивать
    protected $fillable = [
        'user_id','photo'
    ];

    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах
    public $timestamps = true;
}
