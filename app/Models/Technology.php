<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Razdel;
use App\Models\Post;

class Technology extends Model
{
    //Атрибуты которые можно массово присваивать
    protected $fillable = [
        'technology'
    ];

    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах
    public $timestamps = true;

    public function getRazdel()
    {
        return $this->hasMany(Razdel::class);

    }
    public function getSections()
    {
        return $this->hasManyThrough(Post::class,Razdel::class);
    }
}
