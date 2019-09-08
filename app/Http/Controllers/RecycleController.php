<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecycleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //MedicinRestore
    public function MedicinRestore(){
        return view('BackEnd.AdminDashboard.recycle.MediRestore');
        
    }
    //CompanyRestore
    public function CompanyRestore(){
        return view('BackEnd.AdminDashboard.recycle.CompanyRestore');
        
    }
    //DiseaseRestore
    public function DiseaseRestore(){
        return view('BackEnd.AdminDashboard.recycle.DiseaseRestore');
        
    }
}
