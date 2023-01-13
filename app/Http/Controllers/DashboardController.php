<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function create(){
        return [
            'title' => "dashboard",
            'screenName'=> "ダッシュボード",
        ];
    }
}
