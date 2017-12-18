<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Cart;

use App\Bank;

class BankController extends Controller
{
    public function getAmountBalance($id)
    {
    	// $id = $request->input('id');
    	// $cart = $request->session()->get('cart');
        $oldCart = Session::get('cart');
        $cart = new cart($oldCart);
    	
    	$bank = Bank::find($id);
		$amount_balance="";
		$amount_balance=$bank->bank_balance-$cart->total_price;
		$bank->bank_balance = $amount_balance;
		$bank->save();
		//dd($amount_balance);
		return redirect()->route('payment');
    }
}
