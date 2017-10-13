<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Books;
use Auth;

class BookingController extends Controller
{
    public function getExit()
    {
    	return view('shop.exit');
    
	}
    public function getBookingDetails(Request $request)
    {
    	$value = $request->session()->get('cart');
    	// dd($value);
    	dd(Auth::user()->id);
    	// dd($value->totalQty);
    	//$books = Books::find($id);
    	// session(['books' => 'value']);
    	// return redirect()->route('shop.exit');
    }

    public function postBookingDetails(Request $request)
    {
    	$value = $request->session()->get('cart');
    	$post = new books;
        $post->totalQty = $value->request('totalQty');
        $post->total_price = $value->request('total_price');

        $post->save();
    }
}

