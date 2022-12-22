<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product_Category;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Product_category = Product_Category::get();
        return view('admin/product_category/index',compact('Product_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/product_category/create');
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
            'title' => 'required',
            'slug' => 'required'
    
           ]);
           
           
           Product_Category::create([
              
                'title' => request()->get('title'),
                'slug' => request()->get('slug'),
                'description' => request()->get('description'),
                'status' => request()->get('status'),
               
                
            ]);
            
            return redirect()->to('/admin/product_category');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Product_Category::find($id);
        return view('admin/product_category/edit',compact('category'));
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
		
			'title' => 'required',
			'slug' => 'required',
			'description' => 'required',
            'status' => 'required',
		]);


        $category = Product_Category::find($id);
        $category->title = $request['title'];
        $category->slug = $request['slug'];
        $category->description = $request['description'];
        $category->status = $request['status'];

        $category->save();

		return redirect('/admin/product_category');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Product_Category::find($id);

        $category->delete();
        
        return redirect()->back();
    }

    public function updateStatus(Request $request)
    {
        $category = Product_Category::find($request->category_id); 
        $category->status = $request->status; 
        $category->save(); 
        return response()->json(['Success'=>'Status change successfully.']); 
    }
}
