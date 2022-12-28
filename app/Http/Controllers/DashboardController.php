<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function create(Request $request){
        return view('dashboard')->with([
            'title' => "dashboard",
            'screenName'=> "ダッシュボード",
        ]);
    }
}
