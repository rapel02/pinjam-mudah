<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Items::orderBy('rating','desc')->take(8)->get();
        return view('home')->with('items', $items);
    }
}
