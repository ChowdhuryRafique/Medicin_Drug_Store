<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medicinCreate; 
use Cart;

class ShoppingController extends Controller
{
    public function add_to_cart(){
        //dd(request()->all());
        $pdt = medicinCreate::find(request()->pdt_id);
        $medicinCreate = medicinCreate::all();
        $cartItem  = Cart::add([
            'id' => $pdt->id,
            'name' => $pdt->medicinName,
            'qty' => request()->qty,
            'price' => $pdt->medicinPrice,
        ]);
            Cart::associate($cartItem->rowId,'App\medicinCreate');

        return view('FontEnd.Index.index',compact('medicinCreate'));
    }

    public function cart(){

        return view('FontEnd.Index.index');

    }
    public function cart_delete($id){
      
        Cart::remove($id);
        return redirect()->back();

    }
    public function incre($id,$qty){
        Cart::update($id,$qty+1);
        return redirect()->back();
    }

    public function dec($id,$qty){
        Cart::update($id,$qty-1);
        return redirect()->back();
    }
}
