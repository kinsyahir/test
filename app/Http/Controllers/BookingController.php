<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Books;

use App\Course;

use Ap\Subject;

use App\Cart;

use Auth;

class BookingController extends Controller
{
    public function getExit()
    {
    	return view('shop.exit');
	}

    public function postBookingDetails(Request $request)
    {
    	$value = session()->get('cart');
        $data = $request->session()->all();
        dd($data);
        
        $booked = new books;
        $booked->totalQty = $value->totalQty;
        $booked->total_price = $value->total_price;
        $booked->user_id = $value->user_id;
        $booked->subject_id = $value->items;

        $booked->save();

        return redirect()->route('shop.exit');
    }
    
}

