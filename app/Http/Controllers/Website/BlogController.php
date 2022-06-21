<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('Website/blog');
    }
    public function details(){
        return view('Website/blogDetails');
    }
}
