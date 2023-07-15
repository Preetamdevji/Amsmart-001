<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\models\CartItem; 
use Illuminate\Http\Request;

class CartController extends Controller

{
    public function index()
    {
        $cart = CartItem::latest()->get();
         return view('admin/cart/index', compact('cart'));
    }

    // public function delete($id)
    // {
    //     $result = CartItem::find($id);
    //     $result->delete();

    // return redirect()->back()->with('success', 'Item deleted successfully');
    // }

 
}
