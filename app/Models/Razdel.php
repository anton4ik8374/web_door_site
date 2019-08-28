<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Razdel extends Model
{
    //Атрибуты которые можно массово присваивать
    protected $fillable = [
        'razdel','technology_id'
    ];

    //Все поля разрешено менять
    protected $guarded = [];

    //включает выключает метку времени в таблицах
    public $timestamps = true;

    public function getPost()
    {
        return $this->hasMany(Post::class);

    }
}
