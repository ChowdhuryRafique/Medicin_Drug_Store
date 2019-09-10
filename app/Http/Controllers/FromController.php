<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactForm;
class FromController extends Controller
{
    public function contacts(Request $request){
        $contactform = new ContactForm();
        $contactform->name = $request->name;
        $contactform->email = $request->email;
        $contactform->phone = $request->phone;
        $contactform->message = $request->message;
        $contactform->save();
        return back();
    }
    public function message(){
        $message= ContactForm::all();
        
        return view('BackEnd.AdminDashboard.BuyMedicin.message', compact('message'));
    }
    
}
