<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medicinCreate;
use App\Order;

class BuyMedicinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
      // All Order
      public function AllOrder(){
        $medicinCreate = medicinCreate::all();
       
        return view('BackEnd.AdminDashboard.BuyMedicin.allOrder',compact('medicinCreate'));
        
    }
     // Medicin Quantity Show
     public function MedicinQuantity(){
        $medicinCreate = medicinCreate::all();
       
    

        return view('BackEnd.AdminDashboard.BuyMedicin.medicinQuanti',compact('medicinCreate'));
    }

    public function medicine_add_cart(Request $request,$medicine_id,$medicine_quantity){
        if(medicinCreate::find($medicine_id)->medicinQuantity >= $medicine_quantity){
            medicinCreate::find($medicine_id)->decrement('medicinQuantity',$medicine_quantity);
            Order::insert([
              'medicine_id'=>$medicine_id,
              'medicine_quantity'=>$medicine_quantity,
            ]);
            return back();
          }
          if(medicinCreate::find($medicine_id)->medicine_quantity < $medicine_quantity){
            return back();
          }
    }

    public function addcard(){
        $carts = Order::all();
        return view('BackEnd.AdminDashboard.BuyMedicin.addcard',compact('carts'));
    }

    public function order_all(){
      Order::truncate();
      return back();
    }
}