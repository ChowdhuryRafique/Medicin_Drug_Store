<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medicinCreate;
use App\company;
use App\Disease;


class RecycleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //MedicinRestore
    public function MedicinRestore(){


        $medicinCreate = medicinCreate::onlyTrashed()->get();
        return view('BackEnd.AdminDashboard.recycle.MediRestore',compact('medicinCreate'));
        
        
    }
    public function recycle_bin_medicine_restore($medicine_id)
    {

        medicinCreate::withTrashed()
       ->where('id', $medicine_id)
       ->restore();
       return back()->with('success','successfully restore!');
     
      
    }

    //CompanyRestore
    public function recycle_bin_compnay_restore($com_id)
    {
        company::withTrashed()
       ->where('id', $com_id)
       ->restore();
       return back()->with('success','successfully restore!');
     
      
     }
    public function CompanyRestore(){
        $companyCreate = company::onlyTrashed()->get();
        return view('BackEnd.AdminDashboard.recycle.CompanyRestore',compact('companyCreate'));
        
    }
    //DiseaseRestore
    public function DiseaseRestore(){
        $diseases= Disease::onlyTrashed()->get();
        return view('BackEnd.AdminDashboard.recycle.DiseaseRestore',compact('diseases'));
        
    }
    public function recycle_bin_dis_restore($dis_id)
    {
        Disease::withTrashed()
       ->where('id', $dis_id)
       ->restore();
       return back()->with('success','successfully restore!');
     
      
     }
}
