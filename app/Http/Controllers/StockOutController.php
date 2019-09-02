<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockOutController extends Controller
{
    //StockOut function
    public function StockOut(){
        return view('BackEnd.AdminDashboard.BuyMedicin.stockOut');
    }
}
