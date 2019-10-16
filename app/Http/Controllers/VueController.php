<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateServices;
use Hello;

class VueController extends Controller
{
    public function index()
    {
        //dump(VueController::class);
        return view('vue.component');

    }

    public function test()
    {

        #dump(Hello::hi());
        #dump(DateServices::isValid('22/03/2019'));
        return view('vue.lesson2');
    }
}
