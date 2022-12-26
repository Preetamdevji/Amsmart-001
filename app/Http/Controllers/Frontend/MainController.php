<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner_Section;
use App\models\Product_Category;
use App\Models\Product;
use App\Models\CMS;

class MainController extends Controller
{
    public function index()
    {
        $FeaturedProducts = Product::where('status', 1)->where('hot_selling', 1)->get();
        $NewArrivals = Product::where('status', 1)->latest()->take(9)->get();
        $HomeBanners = Banner_Section::where('flag', 'home_banner')->where('status', 1)->get();
        $sliders = Banner_Section::where('flag', 'home_slider')->where('status', 1)->get();
    	return view('index', compact('sliders', 'HomeBanners', 'FeaturedProducts', 'NewArrivals'));
    }

    public function about()
    {
        $CrmAbout = CMS::where('status', 1)->where('flag', 'about_us')->get();
        $CmsFaq = CMS::where('status', 1)->where('flag', 'faq')->get();
    	return view('about', compact('CmsFaq', 'CrmAbout'));
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
        $product = Product::find($id);
        return view('product-detail', compact('product'));
    }

    public function contact()
    {
    	return view('contact');
    }

    public function shopby($id){

        $id = $id;
      $shopby = Product::where('category_id', $id)->get();

      return view('shopbycategory', compact('shopby','id'));
       
    }


}
