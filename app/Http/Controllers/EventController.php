<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Library\Services\Contracts\CustomServiceInterface;
use App\Post;
use Illuminate\Support\Facades\Gate;
use App\Events\Test;

class EventController extends Controller
{
    public function index()
    {

        // want to raise ClearCache event
        event(new Test('Anton','Krivchick'));

        // ...
    }
}
