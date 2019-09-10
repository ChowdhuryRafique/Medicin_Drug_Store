<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medicinCreate;


class IndexController extends Controller
{
    // Index function
    public function Index(){
        $medicinCreate = medicinCreate::all();
        return view('FontEnd.Index.index',compact('medicinCreate'));
    }

    public function myorder(){
        return view('FontEnd.Index.myorder');
    }
   
}
