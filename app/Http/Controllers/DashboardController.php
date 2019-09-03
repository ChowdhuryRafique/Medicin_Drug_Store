<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Dashboard Controller
    public function Dashboard(){
        return view('BackEnd.AdminDashboard.AdminIndex.index');
        
    }
}
