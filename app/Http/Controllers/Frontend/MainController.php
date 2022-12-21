<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function about()
    {
    	return view('about');
    }

    public function product()
    {
    	return view('products');
    }

    public function contact()
    {
    	return view('contact');
    }


}
