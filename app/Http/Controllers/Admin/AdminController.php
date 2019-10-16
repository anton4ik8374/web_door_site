<?php

namespace App\Http\Controllers\Admin;

use App\Components\SuperComponent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Jobs\SendRegistrationMail;




//use App\Mail\RegistrationMail;
//use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index(SuperComponent $component)
    {

        //SendRegistrationMail::dispatch();
        $styles = [
            '/css/css/sb-admin-2.min.css',
            '/vendor/fontawesome-free/css/all.min.css',
            '/css/admin.css',
        ];

        $scripts = [
            '/vendor/jquery/jquery.min.js',
            '/vendor/bootstrap/js/bootstrap.bundle.min.js',
            '/vendor/jquery-easing/jquery.easing.min.js',
            '/js/js/sb-admin-2.min.js',
            /*'/vendor/chart.js/Chart.min.js',
            '/js/js/demo/chart-area-demo.js',
            '/js/js/demo/chart-pie-demo.js',*/
            '/js/admin.js',
        ];

        $menus['admin'] = Menu::GetAdminPage();
        $menus['other'] = Menu::GetOtherPage();
        $user = User::where('id',Auth::id())->first();

        return view('admin',compact('styles','scripts','menus','user'));
    }
}
