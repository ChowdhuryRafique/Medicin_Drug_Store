<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\company;



class CompanyController extends Controller
{  
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Company Add
    public function CompanyAdd(){
        return view('BackEnd.AdminDashboard.company.companyAdd');
    }
// Company Show
    public function CompanyShow(){
        $companyCreate= company::all();
        return view('BackEnd.AdminDashboard.company.companyShow',compact('companyCreate'));
    }
    // company create
    public function companyCreate(Request $request){
        $company = new company();
        $company->CompanyName = $request->CompanyName;
        $company->save();
        return back();
    }
    public function delete($id){
        company::where('id',$id)->delete();
        return back();
    }
       // Medicin Edit
   public function companyEdit($id){
    $create = company::findOrFail($id);
    return view('BackEnd.AdminDashboard.company.companyEdit',compact('create'));
}

public function companyupdate(Request $request){
    $id=$request->com_id;
    company::where('id',$id)->update([
        'companyName'=> $request->CompanyName,//form name   
]);
return redirect()->route('CompanyShow');
}
}