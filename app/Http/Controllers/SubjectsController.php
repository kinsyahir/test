<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\subject;

use App\course;

use Session;

use App\Cart;

class SubjectsController extends Controller
{
        public function create()
    {
        // /subjects/create
        $subjects = subject::all();

        $courses = Course::all();
        return view('subjects.create', compact('subjects', 'courses'));
    }


     	public function store(Request $request)
    {
        // POST /subject

        //return $request->all();

    	//dd(request('course_id'));

        $this->validate(request(), [
            'subject_title' => 'required',
            'subject_desc' => 'required'
        ]);

        $post = new subject;

        $post->subject_title = request('subject_title');
        $post->subject_desc = request('subject_desc');
        $post->subject_price = request('subject_price');
        $post->course_id = request('course_id');

        ///dd($request->file('public/uploads'));

 		if ($request->file('subject_image')) {
            # code...
            $path = $request ->subject_image->store('public/uploads');
            $post->subject_image = $request->subject_image->hashName();
        }

        // Save it to database
        $post->save();

        // and then redirect to the home page
        return redirect('/');

        /*
        $destinationPath = 'public/uploads';
        $file = $request->file('subject_image');

        if($file){
            $file->move(public_path($destinationPath), $file->getClientOriginalName());
            $pathname = $file->getClientOriginalName();
            $post->subject_image = $pathname; 
        }

        $post->save();

        return redirect('/');
        */
    }

    //CONTROLLER FOR SHOPPING-CART
    public function getIndex()
    {
        $subjects = Subject::all();
        return view('shop.index', ['subjects' => $subjects]);
    }

    public function getAddToCart(Request $request, $id)
    {
        $subject = Subject::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($subject, $subject->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('shop.index');
    }

    public function getCart()
    {
        if (!Session::has('cart'))
        {
            return view('shop.shoppingCartTry');
        }

        $oldCart = Session::get('cart');
        $cart = new cart($oldCart);
        //dd($cart->items,$cart->subject_price,$cart->total_price);
        return view('shop.shoppingCartTry', ['subjects'=>$cart->items, 'total_price'=>$cart->total_price, 'totalQty'=>$cart->totalQty,]);
    }

    public function getCheckout()
    {

        dd(9);
        if (!Session::has('cart'))
        {
            return view('shop.checkout');
        }
        $oldCart = Session::get('cart');
        $cart = new cart($oldCart);
        return view('shop.checkout', ['subjects'=>$cart->items, 'total_price'=>$cart->total_price, 'totalQty'=>$cart->totalQty,]);
        // $total = $cart->total_price;
        // return view('shop.checkout', ['total' =>$total]);
    }

   /* public function show(Request $request, $id)
    {
        value = $request->session()->get('');
    }*/

}
