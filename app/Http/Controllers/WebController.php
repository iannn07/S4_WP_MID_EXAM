<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(Request $request){
        return view('home');
    }
    public function admin(Request $request){
        return view('admin_portfolio');
    }
    public function profile(Request $request){
        return view('admin_profile');
    }
    public function edit(Request $request){
        return view('admin_edit');
    }
}
