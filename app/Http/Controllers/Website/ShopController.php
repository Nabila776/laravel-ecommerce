<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index(){
        return view('Website/shopGrid');
    }
    public function details(){
        return view('Website/shopDetails');
    }
    public function cart(){
        return view('Website/shoppingCart');
    }
}
