<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\CMS;

use Illuminate\Support\Facades\file;

class CmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cms = cms::all();
		$data = compact('cms');

        return view('admin/cms_pages/index')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/cms_pages/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
		
			'top_title' => 'required',
			'title' => 'required',
			'text' => 'required',
            'flag' => 'required|not_in:none',
		]);


        $cms = new cms();
		$cms->top_title = $request['top_title'];
		$cms->title = $request['title'];
		$cms->body = $request['text'];
        $cms->flag = $request['flag'];
		$cms->status = $request['status'];

        if($request->hasfile('img'))
		{
    
		  $file = $request->file('img');
		  $extension = $file->getClientOriginalExtension();
		  $filename = time().'.'.$extension;
		  $file->move('uploads/', $filename);
		  $cms->img = $filename;

		}

		$cms->save();
		return redirect()->to('admin/cms_pages');
      
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
        $cms = cms::find($id);
		$data = compact('cms');

        return view('admin/cms_pages/edit')->with($data);

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
		
			'top_title' => 'required',
			'title' => 'required',
			'text' => 'required',
            'flag' => 'required|not_in:none',
		]);


        $cms = cms::find($id);
        $cms->top_title = $request['top_title'];
		$cms->title = $request['title'];
		$cms->body = $request['text'];
        $cms->flag = $request['flag'];
		$cms->status = $request['status'];

        if($request->hasfile('img'))
		{
          $destination = 'uploads/'.$cms->img;
		  if(file::exists($destination)){

               file::delete($destination);
		  }
		   
		  $file = $request->file('img');
		  $extension = $file->getClientOriginalExtension();
		  $filename = time().'.'.$extension;
		  $file->move('uploads/', $filename);
		  $cms->img = $filename;

		}

        $cms->save();
        return redirect()->to('admin/cms_pages');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cms = cms::find($id);
		$cms->delete();
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
