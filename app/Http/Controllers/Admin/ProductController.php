<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_Category;
use App\Models\Brand;
use Illuminate\Support\Facades\file;





class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('LinkProductCategory')->with('LinkProductBrand')->get();
        return view('admin/product/index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Product_Category::get();
        $brands = Brand::get();
       return view('admin/product/create',compact('categories','brands'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           
            'product_name' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'availability' => 'required',
            'old_price' => 'required',
            'new_price' => 'required',
            'color_family' => 'required',
            'product_img' => 'required',
            'description' => 'required'
    

           ]);

           $fileName = null;
    	if (request()->hasFile('product_img'))
    	{
    	   $file = request()->file('product_img');
    	   $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->
    	   	   getClientOriginalExtension();
    	   $file->move('./uploads/', $fileName);
    	}
        
           Product::create([
              
                'product_name' => request()->get('product_name'),
                'category_id' => request()->get('category_id'),
                'brand_id' => request()->get('brand_id'),
                'availability' => request()->get('availability'),
                'old_price' => request()->get('old_price'),
                'new_price' => request()->get('new_price'),
                'color_family' => request()->get('color_family'),
                'hot_selling' => request()->get('hot_selling'),
                'description' => request()->get('description'),
                'status' => request()->get('status'),
                'product_img' => $fileName,
            ]);
            
            return redirect()->to('/admin/product');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::find($id);
        return view('admin/product/view',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Product_Category::get();
        $brands = Brand::get();
        $products = Product::find($id);
        return view('admin/product/edit',compact('products','categories','brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
		
			'product_name' => 'required',
			'category_id' => 'required',
			'brand_id' => 'required',
            'availability' => 'required',
            'old_price' => 'required',
			'new_price' => 'required',
			'color_family' => 'required',
            'description' => 'required'
		]);

           $product = Product::find($id);
	    	$currentImage = $product->product_img;

	    	$fileName = null;
	        if (request()->hasFile('product_img'))
	        {
	        	$file = request()->file('product_img');
	        	$fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
	        	$file->move('./uploads/', $fileName);
	        }

            $product->update([
                'product_name' => request()->get('product_name'),
                'category_id' => request()->get('category_id'),
                'brand_id' => request()->get('brand_id'),
                'availability' => request()->get('availability'),
                'old_price' => request()->get('old_price'),
                'new_price' => request()->get('new_price'),
                'color_family' => request()->get('color_family'),
                'hot_selling' => request()->get('hot_selling'),
                'product_img' => ($fileName) ? $fileName : $currentImage,
                'description' => request()->get('description'),
                'status' => request()->get('status'),
                
            ]);

    //     if($request->hasfile('product_img'))
	// 	{
    //       $destination = 'uploads/'.$category->product_img;
	// 	  if(file::exists($destination)){

    //            file::delete($destination);
	// 	  }
		   
	// 	  $file = $request->file('product_img');
	// 	  $extension = $file->getClientOriginalExtension();
	// 	  $filename = time().'.'.$extension;
	// 	  $file->move('uploads/', $filename);
	// 	  $category->product_img = $filename;

	// 	}
	// 	$category->save();
	// 	return redirect('/admin/product');

	// }


    
    if ($fileName) {
        File::delete('./uploads/' . $currentImage);
        }

        return redirect()->to('/admin/product');
        
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $product = Product::find($id);
	    	$currentImage = $product->product_img;
	    	$product->delete();
	    	File::delete('./uploads/' . $currentImage);
	    	return redirect()->back();
    }

    // public function viewdetail($id)
    // {
    //     $product = Product::find($id);
    //     return view('admin/product/view',compact('product'));
    // }

    public function updateStatus(Request $request)
    {
        $product = Product::find($request->Product_id); 
        $product->status = $request->status; 
        $product->save(); 
        return response()->json(['Success'=>'Status change successfully.']); 
    }
}
