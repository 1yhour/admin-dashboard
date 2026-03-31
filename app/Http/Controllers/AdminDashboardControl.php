<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardControl extends Controller
{
    public function admin(){
        return view("admin.dashboard");
    }
    public function user(){
        return view("admin.user");
    }
}

