<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyMedicinController extends Controller
{
      // All Order
      public function AllOrder(){
        return view('BackEnd.AdminDashboard.BuyMedicin.allOrder');
        
    }
     // Medicin Quantity Show
     public function MedicinQuantity(){

        return view('BackEnd.AdminDashboard.BuyMedicin.medicinQuanti');
    }
}
