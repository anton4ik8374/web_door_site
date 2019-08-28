<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Images extends Model
{
    public static function interventionInit($name)
    {
        $newName = explode('/',$name);

        $img = Image::make(base_path('/storage/app/public/galery/'.$newName[3]));
        $img->resize(284,213)->save(base_path('/storage/app/public/galery/mini/' . $newName[3]));
        return '/storage/galery/mini/' . $newName[3];
    }
}
