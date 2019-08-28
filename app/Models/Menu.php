<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //Атрибуты которые можно массово присваивать
    protected $fillable = [
        'name','name_laravel','uri','is_admin','active'
    ];

    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах
    public $timestamps = true;

    public function scopeGetAdminPage($query)
    {
        return $query->where('is_admin','=',1)->get();
    }

    public function scopeGetOtherPage($query)
    {
        return $query->where('is_admin','=',0)->where('active','=',1)->get();
    }
}
