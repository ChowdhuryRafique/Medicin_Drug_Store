<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\company;

class CompanyController extends Controller
{   // Company Add
    public function CompanyAdd(){
        return view('BackEnd.AdminDashboard.company.companyAdd');
    }
// Company Show
    public function CompanyShow(){
        $companyCreate= companyCreate::all();
        return view('BackEnd.AdminDashboard.company.companyShow',compact('companyCreate'));
    }
    // company create
    public function companyCreate(Request $request){
        $companyCreate = new companyCreate();
        $companyCreate->CompanyName = $request->CompanyName;
        return back();
    }
}
