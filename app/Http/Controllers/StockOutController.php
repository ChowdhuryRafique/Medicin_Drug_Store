<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockOutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //StockOut function
    public function StockOut(){
        return view('BackEnd.AdminDashboard.BuyMedicin.stockOut');
    }
}
