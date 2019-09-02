<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
     // IndAboutex function
     public function About(){
        return view('FontEnd.About.about');
    }
}
