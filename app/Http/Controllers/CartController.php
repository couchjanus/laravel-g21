<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function index(){
        return view('web.cart');
    }

    public function remove(){
        return true;
    }
}
