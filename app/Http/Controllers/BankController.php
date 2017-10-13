<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bank;

class BankController extends Controller
{
    public function getAmountBalance(Request $request)
    {
    	// dd ($request);
    	$id = $request->input('id');
    	$value = $request->session()->get('cart');
    	
    	$bank = Bank::find($id);
		$amount_balance="";
		$amount_balance=$bank->bank_balance-$value->total_price;
		$bank->bank_balance = $amount_balance;
		$bank->save();
		//dd($amount_balance);
		return redirect()->route('shop.booking');
    }
}
