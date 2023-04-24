<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $data = Portfolio::all();
        return view('portfolio.index', compact('data'));
    }
}
