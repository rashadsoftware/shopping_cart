<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopCartController extends Controller
{
    public function index(){
        return view('index');
    }

    public function card(){
        return view('card');
    }

    public function checkout(){
        return view('checkout');
    }
}
