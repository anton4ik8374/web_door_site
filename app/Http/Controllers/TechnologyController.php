<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technology;
use App\Models\Razdel;
use App\Models\Post;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            '/vendor/chart.js/Chart.min.js',
            '/js/js/demo/chart-area-demo.js',
            '/js/js/demo/chart-pie-demo.js',
            '/js/admin.js',
        ];

        $menus['admin'] = Menu::GetAdminPage();
        $menus['other'] = Menu::GetOtherPage();
        $user = Auth::user();
        $technologis = Technology::all();

        return view('technology',compact('technologis','styles','scripts','menus','user'));
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
        //
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
