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
    	$this->validate($request,[
            'name' => 'required',
			'email' => 'required',
			'password' => 'required'
    	]);

        $user = new user;

        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');

        //dd ($request->all());
        // Save it to database
        $user->save();

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
