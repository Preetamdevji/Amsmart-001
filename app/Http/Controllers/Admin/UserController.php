<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\file;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::latest()->get();
		$data = compact('user');
        return view('admin/user/index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/user/create');
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
		
			'fullname' => 'required',
			'designation' => 'required',
			'mobile' => 'required',
			'user_img' => 'required',
			'status' => 'required',
		]);


        $user = new user();
		$user->fullname = $request['fullname'];
		$user->designation = $request['designation'];
		$user->mobile = $request['mobile'];
		$user->status = $request['status'];

        if($request->hasfile('user_img'))
		{
    
		  $file = $request->file('user_img');
		  $extension = $file->getClientOriginalExtension();
		  $filename = time().'.'.$extension;
		  $file->move('uploads/', $filename);
		  $user->user_img = $filename;

		}

		$user->save();
		return redirect()->to('admin/user');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = user::find($id);

		$data = compact('user');
        return view('admin/user/edit')->with($data);
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
		
			'fullname' => 'required',
			'designation' => 'required',
			'mobile' => 'required',
			'status' => 'required',
		]);
        
        $user = user::find($id);
        $user->fullname = $request['fullname'];
		$user->designation = $request['designation'];
		$user->mobile = $request['mobile'];
		$user->status = $request['status'];
        

        if($request->hasfile('user_img'))
		{
          $destination = 'uploads/'.$user->user_img;
		  if(file::exists($destination)){

               file::delete($destination);
		  }
		   
		  $file = $request->file('user_img');
		  $extension = $file->getClientOriginalExtension();
		  $filename = time().'.'.$extension;
		  $file->move('uploads/', $filename);
		  $user->user_img = $filename;

		}

        $user->save();

        return redirect()->to('admin/user');


       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = user::find($id);
		$user->delete();
		return redirect()->back();
        
    }


    public function updateStatus(Request $request)
    {
        $user = user::find($request->user_id); 
        $user->status = $request->status; 
        $user->save(); 
        return response()->json(['Success'=>'Status change successfully.']); 
    }
    

}
