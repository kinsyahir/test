<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class UserController extends Controller
{
    public function getSignup() 
    {
    	return view('user.signup');
    }

    public function postSignup(Request $request) 
    {
        //validate the form 
    	$this->validate($request,[
            'name' => 'required',
			'email' => 'required',
			'password' => 'required'
    	]);

        //create and save the user
        $user = User::create(request(['name', 'email', 'password']));

        //sign them in
        auth()->login($user);

        // and then redirect to the home page
        return redirect('/checkout');
    }

    public function getSignin()
    {
    	return view('user.signin');
    }

    public function postSignin(Request $request)  //store
    {
    	$this->validate($request,[
			'email' => 'email|required',
			'password' => 'required'
    	]);

        return redirect('/checkout');

        // if (Auth::attempt(['name' => $request->('name'), 'email' => $request->input('email'), 'password' => $request->input('password')]))
        // {
        //     return redirect()->route('user.profile');
        // }
        // return redirect()->route('user.profile');

    }

    public function getProfile() 
    {
    	return view('user.profile');
    }

    public function getLogout() 
    {
    	Auth::logout();
    	return redirect()->back();
    }


}
