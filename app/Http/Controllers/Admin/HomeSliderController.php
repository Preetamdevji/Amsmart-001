<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\home_slider;
use Illuminate\Support\Facades\file;



class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $home_slider = home_slider::all();
		$data = compact('home_slider');
        return view('admin/home_slider/index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/home_slider/create');
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
			'flag' => 'required',
            'button' => 'required',
			'slider_image' => 'required',
			'status' => 'required',
		]);

        $home_slider = new home_slider();
		$home_slider->top_title = $request['top_title'];
		$home_slider->title = $request['title'];
		$home_slider->flag = $request['flag'];
        $home_slider->button = $request['button'];
		$home_slider->status = $request['status'];

        if($request->hasfile('slider_image'))
		{
    
		  $file = $request->file('slider_image');
		  $extension = $file->getClientOriginalExtension();
		  $filename = time().'.'.$extension;
		  $file->move('uploads/', $filename);
		  $home_slider->slider_image = $filename;

		}

		$home_slider->save();
		return redirect()->to('admin/home_slider');


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
        $home_slider = home_slider::find($id);
		$data = compact('home_slider');

        return view('admin/home_slider/edit')->with($data);
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
        $home_slider = home_slider::find($id);
        $home_slider->top_title = $request['top_title'];
		$home_slider->title = $request['title'];
        $home_slider->flag = $request['flag'];
		$home_slider->status = $request['status'];

        if($request->hasfile('slider_image'))
		{
          $destination = 'uploads/'.$home_slider->slider_image;
		  if(file::exists($destination)){

               file::delete($destination);
		  }
		   
		  $file = $request->file('slider_image');
		  $extension = $file->getClientOriginalExtension();
		  $filename = time().'.'.$extension;
		  $file->move('uploads/', $filename);
		  $home_slider->slider_image = $filename;

		}

        $home_slider->save();
        return redirect()->to('admin/home_slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $home_slider = home_slider::find($id);
		$home_slider->delete();
		return redirect()->back();
    }
}
