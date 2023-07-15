<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::latest()->get();
        return view('admin/brand/index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

       public function create()
    {
        return view('admin/brand/create');
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
        Brand::create([      
            'title' => request()->get('title'),
            'slug' => request()->get('slug'),
            'description' => request()->get('description'),
            'status' => request()->get('status'),
           
            
        ]);
        
        
        // return redirect('admin/brand/index')

        return redirect()->to('/admin/brand');

       
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
        $brand = Brand::find($id);
        return view('admin/brand/edit',compact('brand'));
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

		

		$brand = Brand::find($id);
		$brand->title = $request['title'];
		$brand->slug = $request['slug'];
	    $brand->description = $request['description'];
		$brand->status = $request['status'];

		$brand->save();

		return redirect('/admin/brand');

	}
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        
        $brand = Brand::find($id);
        
		$brand->delete();
        
        return redirect()->back();
    }

    public function updateStatus(Request $request)
    {
        $brand = Brand::find($request->brand_id); 
        $brand->status = $request->status; 
        $brand->save(); 
        return response()->json(['Success'=>'Status change successfully.']); 
    }
}
