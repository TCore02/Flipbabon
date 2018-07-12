<?php

namespace App\Http\Controllers\User;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
	public function homepage()
	{
		try
		{
			return view ('/category.home');
		}
		catch (\Exception $exception)
        {
            return $exception;
        }
	}
	public function login()
	{
		try
		{
			return view ('user.login');
		}
		catch (\Exception $exception)
        {
            return $exception;
        }
	}
    public function loginall(Request $request)
    {
        $rules = array(
            'email' =>'required|email',
            'password'  =>'required|min:6',
        );
         $this->validate( $request , $rules);
    	try
    	{
	    	$credentials = [
	    		'email' => $request->email,
	    		'password' => $request->password
	    	];

	    	if(Auth::attempt($credentials)) {
	    		return redirect()->route('project.homepage');
	    	}
	    	else {
	    		return redirect()->route('project.login')->with(['success'=>false, 'message' => "Check your credentials!!"]);
	    	}
    	}
    	catch (\Exception $exception)
        {
            return $exception;
        }
    }
    public function logout()
    {
    	try
    	{
    		Auth::logout();
    			return redirect()->route('project.homepage');
    	}
    	catch (\Exception $exception)
        {
            return $exception;
        }
    }
}
