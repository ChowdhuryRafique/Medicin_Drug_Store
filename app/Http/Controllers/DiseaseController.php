<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    // Disease Add
    public function DiseaseAdd(){
        return view('BackEnd.AdminDashboard.disease.diseaseAdd');
        
    }
     // Disease Show
     public function DiseaseShow(){
        return view('BackEnd.AdminDashboard.disease.diseaseShow');
        
    }
}
