<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner_Section;


class MainController extends Controller
{
    public function index()
    {
        
        $HomeBanners = Banner_Section::where('flag', 'home_banner')->where('status', 1)->get();
        $sliders = Banner_Section::where('flag', 'home_slider')->where('status', 1)->get();
    	return view('index', compact('sliders', 'HomeBanners'));
    }

    public function about()
    {
    	return view('about');
    }

    public function product()
    {
        $DealBanner = Banner_Section::where('flag', 'deal_banner')->where('status', 1)->get();
    	return view('products', compact('DealBanner'));
    }

    public function contact()
    {
    	return view('contact');
    }


}
