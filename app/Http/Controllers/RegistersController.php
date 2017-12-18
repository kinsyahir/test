<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class RegistersController extends Controller
{
    // public function create()
    // {
    // 	return view('registration.create');
    // }

    public function store(Request $request)
    {
    	//validate the form
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required',
    		'password' => 'required'
    	]);

    	//create form and save
    	// \\$user = User::create(request(['name', 'email', 'password']));

    	$post = new User;

        $post->name = request('name');
        $post->email = request('email');
        $post->password = bcrypt(request('password'));

        // Save it to database
        $post->save();

    	//sign them in
    	auth()->login($user);

    	//redirect to the home 
    	return redirect()->home();
    }

}

