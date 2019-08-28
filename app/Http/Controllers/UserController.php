<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\User;
use App\Models\Images;

class UserController extends Controller
{
    public function index()
    {
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
            '/js/admin.js',
        ];

        $menus['admin'] = Menu::GetAdminPage();
        $menus['other'] = Menu::GetOtherPage();
        $user = User::where('id',Auth::id())->first();

        return view('userinfo',compact('styles','scripts','menus','user'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 123;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
