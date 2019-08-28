<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Атрибуты которые можно массово присваивать
    protected $fillable = [
        'name','slug','permissions'
    ];

    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах
    public $timestamps = true;

    //Преобразование данных на-лету т.к. permissions это json нам нужен array
    protected $casts = [
        'permissions' => 'array'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
