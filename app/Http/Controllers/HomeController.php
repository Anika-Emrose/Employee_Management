<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    function index(){
       
        return view('front-end.home');
    }
 
}

