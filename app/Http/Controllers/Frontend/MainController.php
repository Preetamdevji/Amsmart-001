<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\models\Product;

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
        $search = $request['search'] ?? "";

        if($search != ""){
            $products = Product::where('product_name', '=', $search)->get();
        }
        else{
            $products = Product::with('product_name')->where('status', 1)->get(); 
        }
    	return view('products', compact('products', 'search'));
        
    }

    public function contact()
    {
    	return view('contact');
    }


}
