<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Banner_Section;
use Illuminate\Support\Facades\file;



class BannerSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Banner_Section = Banner_Section::latest()->get();
		$data = compact('Banner_Section');
        return view('admin/banner_section/index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

     return view('admin/banner_section/create');
    
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
			'flag' => 'required|not_in:none',
			'slider_image' => 'required',
		]);

        $Banner_Section = new Banner_Section();
		$Banner_Section->top_title = $request['top_title'];
		$Banner_Section->title = $request['title'];
		$Banner_Section->flag = $request['flag'];
        $Banner_Section->button = $request['button'];
		$Banner_Section->status = $request['status'];

        if($request->hasfile('slider_image'))
		{
    
		$file = $request->file('slider_image');
		$extension = $file->getClientOriginalExtension();
		$filename = time().'.'.$extension;
		$file->move('uploads/', $filename);
		$Banner_Section->slider_image = $filename;

		}

		$Banner_Section->save();
		return redirect()->to('admin/banner_section');
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
        $Banner_Section = Banner_Section::find($id);
		$data = compact('Banner_Section');

        return view('admin/Banner_Section/edit')->with($data);
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
			'flag' => 'required|not_in:none',
		]);

        $Banner_Section = Banner_Section::find($id);
        $Banner_Section->top_title = $request['top_title'];
		$Banner_Section->title = $request['title'];
        $Banner_Section->flag = $request['flag'];
        $Banner_Section->button = $request['button'];
		$Banner_Section->status = $request['status'];

        if($request->hasfile('slider_image'))
		{
          $destination = 'uploads/'.$Banner_Section->slider_image;
		  if(file::exists($destination)){

               file::delete($destination);
		  }
		   
		  $file = $request->file('slider_image');
		  $extension = $file->getClientOriginalExtension();
		  $filename = time().'.'.$extension;
		  $file->move('uploads/', $filename);
		  $Banner_Section->slider_image = $filename;

		}

        $Banner_Section->save();
        return redirect()->to('admin/banner_section');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Banner_Section = Banner_Section::find($id);
		$Banner_Section->delete();
		return redirect()->back();
    }

    public function updateStatus(Request $request)
    {
        $Banner_Section = Banner_Section::find($request->banner_id); 
        $Banner_Section->status = $request->status; 
        $Banner_Section->save(); 
        return response()->json(['Success'=>'Status change successfully.']); 
    }
}
