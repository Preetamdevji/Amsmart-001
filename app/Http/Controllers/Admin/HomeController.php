<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Auth;
use File;
use Validator;

class HomeController extends Controller
{
    public function profile()
    {
    	return view('admin/authpages/profile');
    }

    public function profile_update(Request $request)
    {
    	$user = Auth::user();
    	$validator = Validator::make($request->all(), [
    		'fullname' => 'required',
    		'designation' => 'required',
    		'bio' => 'required',
    	]);

    	if ($validator->passes()) {
    		$fileName = $user->user_img;
    	if (request()->hasFile('user_img'))
    	{
    		$file = request()->file('user_img');
    		$fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
    		$file->move('./uploads/', $fileName);

    		File::delete('./uploads/' . $user->user_img);
    	}
		$data = $request->all();
    	$data['user_img'] = $fileName;
    	$user->update($data);
            return response()->json(['success'=>'Added new records.']);
        }
        else{
        	 return response()->json(['error'=>$validator->errors()->all()]);
        }
    }

    public function update_password(Request $request)
    {
    	$request->validate([
            'current_password' => ['required'],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        $user = User::find(auth()->user()->id);
        if (Hash::check($request->current_password,$user->password)){	
        $user->update(['password'=> Hash::make($request->new_password)]);
        }else{
        return redirect()->back()->with('error', 'current password not match!');
        }
    	return redirect()->back()->with('success', 'password changed!');
    	// return redirect()->back();
   
        // dd('Password change successfully.');

    }

}
