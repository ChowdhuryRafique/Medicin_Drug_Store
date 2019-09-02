<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // Index function
    public function Index(){
        return view('FontEnd.Index.index');
    }
}
