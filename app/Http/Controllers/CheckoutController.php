<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Invoice;
use Illuminate\Support\Facades\Mail;
use Cart;

class CheckoutController extends Controller
{
    public function checkout(){
        return view('web.checkout');
    }
    public function placeOrder(Request $request){

        $this->ship();
        Cart::clear();
        return view('web.success');
    }

    private function ship(){
        Mail::to(\Auth::user())->send(new Invoice);
    }

    public function success(){
        return view('web.success');
    }
}
