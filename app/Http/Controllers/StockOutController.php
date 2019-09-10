<?php

namespace App\Http\Controllers;
use App\medicinCreate;

use Illuminate\Http\Request;

class StockOutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //StockOut function
    public function StockOut(){
      
        $medicinCreate = medicinCreate::where('medicinQuantity','<=','30')->get();
        return view('BackEnd.AdminDashboard.BuyMedicin.stockOut',compact('medicinCreate'));
        }

    public function new_medicine_add(Request $request,$medicine_id,$medicine_quantity)
      {
        medicinCreate::find($medicine_id)->increment('medicinQuantity',$medicine_quantity);
        return back()->with('success','successfully Added!');
      }
}
