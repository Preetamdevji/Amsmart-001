<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner_Section;
use App\models\Product_Category;
use App\Models\Product;
use App\Models\CMS;
use App\Models\CartItem;
use App\Models\User_Login;
use Illuminate\Support\Facades\Auth;



class MainController extends Controller
{
    public function index()
    {
        $search = $request['search'] ?? "";
        $FeaturedProducts = Product::where('status', 1)->where('hot_selling', 1)->get();
        $NewArrivals = Product::where('status', 1)->latest()->take(9)->get();
        $HomeBanners = Banner_Section::where('flag', 'home_banner')->where('status', 1)->get();
        $sliders = Banner_Section::where('flag', 'home_slider')->where('status', 1)->get();
    	return view('index', compact('sliders', 'HomeBanners', 'FeaturedProducts', 'NewArrivals','search'));
    }

    public function about()
    {
        $search = $request['search'] ?? "";
        $CrmAbout = CMS::where('status', 1)->where('flag', 'about_us')->get();
        $CmsFaq = CMS::where('status', 1)->where('flag', 'faq')->get();
    	return view('about', compact('CmsFaq', 'CrmAbout', 'search'));
    }

    public function product(request $request)
    {
       
    //    $product = Product::where('status', 1)->get();

        $search = $request['search'] ?? "";

        if($search != ""){
            $Allproducts = Product::where('product_name', 'LIKE', "%$search%")->get();
        }
        else{
            $Allproducts = Product::where('status', 1)->get();
        }

        $Product_Cate = Product_Category::all();

        $DealBanner = Banner_Section::where('flag', 'deal_banner')->where('status', 1)->get();

       return view('products', compact('DealBanner', 'Product_Cate','Allproducts', 'search'));

    }

    public function ProductDetail($id)
    {
        $search = $request['search'] ?? "";
        $product = Product::find($id);
        return view('product-detail', compact('product', 'search'));
    }

    public function contact()
    {

        $search = $request['search'] ?? "";
    	return view('contact', compact('search'));
    }

    public function shopby($id){

      $search = $request['search'] ?? "";

      $id = $id;
      $shopby = Product::where('category_id', $id)->get();

      return view('shopbycategory', compact('shopby', 'id', 'search'));
       
    }

    public function addToCart(Request $request)
{
    $search = $request->input('search', '');

    // if (Auth::check()) {
    //     $cart = CartItem::where('user_id', Auth::id())->get();
    //     // dd($cart);
    //     return view('cart', compact('cart', 'search'));
    // } else {
    //     return redirect('/login');
    // }

    $productId = $request->input('product_id');
    $quantity = $request->input('quantity');

    if (!$productId) {
        return redirect()->back()->with('error', 'Product ID is missing.');
    }

    // Check if the product is already in the cart for the current user
    $cartItem = CartItem::where('user_id', Auth::id())
        ->where('product_id', $productId)
        ->first();

    // if ($cartItem) {
    //     // Update the quantity if the product is already in the cart
    //     $cartItem->quantity += $quantity;
    //     $cartItem->save();
    // } 
    else
    {
        // Create a new cart item if the product is not in the cart
        CartItem::create([
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'quantity' => $quantity
        ]);
    }

    $cart = CartItem::with('linkProduct')->latest()->get();
    return view('cart', compact('cart', 'search'))->with('success', 'Product added to cart!');
}


    public function delete($id){
    $cartItem = CartItem::find($id);
    // dd($cartItem);
    if (!$cartItem) {
        return redirect()->back()->with('error', 'Item not found.');
    }
    $cartItem->delete();
    return redirect()->back()->with('success', 'Item deleted successfully');
    }



    // public function delete($id)
    // {
    //     $cartItem = CartItem::find($id);
    //     dd($cartItem);
    //     $cartItem->delete();
    //     return redirect()->back()->with('success', 'Item deleted successfully');
    // }
     
}
