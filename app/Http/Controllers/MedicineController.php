<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medicinCreate;
class MedicineController extends Controller
{
    // Medicin Add function
    public function medicineAdd(){

        return view('BackEnd.AdminDashboard.Medicin.MedicinAdd');
    }
    
    public function medicinCreate(Request $request){
        $medicinCreate = new medicinCreate();
        $medicinCreate->medicinName = $request->medicinName;
        $medicinCreate->medicinQuantity = $request->medicinQuantity;
        $medicinCreate->medicinPrice = $request->medicinPrice;
        $medicinCreate->medicinDescription = $request->medicinDescription;
        $medicinCreate->medicinSelect = $request->medicinSelect;
        $medicinCreate->diseaseName = $request->diseaseName;
        $path = $request->file('imageupload')->store('ImageFolder');
        $medicinCreate->imageupload = $path;
        $medicinCreate->save();
        return back();
    }
    // Medicin delete
    public function medicineDelete($id){
        medicinCreate::where('id',$id)->delete();
        return back();
}
   // Medicin Edit
   public function medicineEdit($id){
    $create = medicinCreate::findOrFail($id);
    return view('BackEnd.AdminDashboard.medicin.MedicinEdit',compact('create'));
}
   // Medicin Edit
   public function medicineupdate(Request $request){
    $id=$request->medicine_id;
    if($request->hasFile('ImageFolder')){
       
        medicinCreate::where('id',$id)->update([
            'medicinName'=> $request->medicinName,
           'medicinQuantity'=> $request->medicinQuantity,
           'medicinPrice'=> $request->medicinPrice,
              'medicinDescription'=> $request->medicinDescription,
         'medicinSelect'=> $request->medicinSelect,
           'diseaseName'=> $request->diseaseName,
    ]);

        $path = $request->file('ImageFolder')->store('ImageFolder');
        Product::find($id)->update([
                'ImageFolder'=> $path
            ]);
                return back()->with('sucess','This is profitably over');
     }
     else{
          
        medicinCreate::where('id',$id)->update([
            'medicinName'=> $request->medicinName,
           'medicinQuantity'=> $request->medicinQuantity,
           'medicinPrice'=> $request->medicinPrice,
              'medicinDescription'=> $request->medicinDescription,
         'medicinSelect'=> $request->medicinSelect,
           'diseaseName'=> $request->diseaseName,
    ]);
    return redirect()->route('medicineShow');
     }
}

    // Medicin show function

    public function medicineShow(){
            $medicinCreate = medicinCreate::all();
        return view('BackEnd.AdminDashboard.medicin.MedicinShow',compact('medicinCreate'));
    }
}
