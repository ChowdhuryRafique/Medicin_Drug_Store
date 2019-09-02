<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Dashboard Controller
    public function Dashboard(){
        return view('BackEnd.AdminDashboard.AdminIndex.index');
        
    }
}
