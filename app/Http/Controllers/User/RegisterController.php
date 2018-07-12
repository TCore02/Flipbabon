<?php

namespace App\Http\Controllers\User;

use Image;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
    	// dd("controller is hitting");
    	
    	$rules = array(
			'profile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'name'		=>'required|max:15',
			'number' 	=>'required|integer|digits:10|unique:users',
			'email'		=>'required|email|unique:users',
			'password'	=>'required|string|min:6',
			'confirmpassword'	=>'required_with:password|same:password|min:6'

		);
		 $this->validate( $request , $rules);
    	try
    	{
    		$user = new User();
    		$user->name = $request->name;
    		$user->number = $request->number;
    		$user->email = $request->email;
    		$user->password = $request->password;
    		$user->role 	= '2';
    		if($request->hasfile('profile'))
            {
                $profile = $request->file('profile');
                $profilename =time().'.'.$profile->getClientOriginalExtension();
                Image::make($profile)->save(public_path('image/' . $profilename));
                $user->profile = $profilename;
            }
    		$user->save();
    		// dd(1);

    		return redirect()->route('project.login')->with(['success' => true, 'message'=>'Registered Successfully.. Now Login!!!!']);
    	}
	    catch (\Exception $exception)
        {
            return $exception;
        }

    }
}
