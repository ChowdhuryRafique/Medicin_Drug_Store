<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disease;

class DiseaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Disease Add
    public function DiseaseAdd(){
        return view('BackEnd.AdminDashboard.disease.diseaseAdd');
        
    }
     // Disease Show
     public function DiseaseShow(){
        $diseases= Disease::all();
        return view('BackEnd.AdminDashboard.disease.diseaseShow',compact('diseases'));
        
    }
    // company create
    public function disease_create(Request $request){
        $disease = new Disease();
        $disease->disease_name = $request->disease_name;
        $disease->save();
        return back();
    }
    public function delete($id){
        Disease::where('id',$id)->delete();
        return back();
    }
    public function disease_edit($id){
        $create = Disease::findOrFail($id);
        return view('BackEnd.AdminDashboard.disease.disease_edit',compact('create'));
    }
    public function disease_update(Request $request){
        $id=$request->com_id;
        Disease::where('id',$id)->update([
            'disease_name'=> $request->disease_name,//form name
          
    ]);
    return redirect()->route('DiseaseShow');
    }
}
