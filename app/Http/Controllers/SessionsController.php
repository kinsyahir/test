<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use App\Cart;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function store(Request $request)
    {
        //authenticaticate the user
        $this->validate(request(), [
            'email' => 'required',
            'password' => 'required'
        ]);

       //  $dataAttempt = array(
       //      'email' => $request->email,
       //      'password' => $request->password
       //  );

       //  if(Auth::attempt($dataAttempt))
       //  {
       //   dd(Auth::attempt(['email' => $request->email, 'password' => $request->password]));
        
       // return redirect()->route('checkout'); 
       //  }

       //  dd(Auth::attempt($dataAttempt));

        $user = User::where('email',$request->email)->first();
        $user_id = $user->id;
        $oldCart = Session::get('cart');
        $cart = new cart($oldCart);
        $cart->addNewCustomer($user_id, $user_id);
        

        return redirect()->route('udemy.checkout');

    }

    public function destroy()
    {
    	auth()->logout();
    	return redirect()->route('shop.index');
    }
 }
