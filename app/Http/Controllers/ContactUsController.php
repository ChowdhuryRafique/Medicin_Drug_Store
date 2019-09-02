<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
     // IndAboutex function
     public function Contact(){
        return view('FontEnd.Contact.Contact');
    }
}
