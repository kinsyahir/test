<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\subject;

use App\course;

use Session;

use Stripe\Charge;

use Stripe\Stripe;

use App\Cart;

use Mail;

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

        // dd($request->hasFile('subject_image'));

 		if ($request->hasFile('subject_image')) {
            # code...
            //dd($request->subject_image);
           $path = $request ->subject_image->store('public/uploads');
           $post->subject_image = $request->subject_image->hashName();
           // Storage::disk('local')->put($request->subject_image->hashName(), $request -> subject_image);
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

    //LANDING PAGE VIEW
    public function getLandingPage()
    {
        $subjects = Subject::all();
        return view('udemy.landingpage', ['subjects' => $subjects]);
    }

    //list of courses
    public function getCourses()
    {
        $subjects = Subject::all();
        return view('udemy.course', ['subjects' => $subjects]);
    }

    //content of subject
    public function getContent()
    {
        $subjects = Subject::all();
        return view('udemy.content', compact('subjects'));
    }

    //CONTROLLER FOR SHOPPING-CART
    public function getIndex()
    {
        $subjects = Subject::all();
        return view('shop.index', ['subjects' => $subjects]);
    }

    public function getAddToCart(Request $request, $id)
    {
        // dd($request,$id);
        $subjects = Subject::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($subjects, $subjects->id);
        
        $request->session()->put('cart', $cart);

        // dd($request->session()->get('cart'));
        return redirect()->route('udemy.cart');
    }

    public function getCart()
    {   
        $subjects = Subject::all();
        if (!Session::has('cart'))
        {
            return view('udemy.content');
        }

        $oldCart = Session::get('cart');
        $cart = new cart($oldCart);
        //dd($cart->items,$cart->subject_price,$cart->total_price);
        return view('udemy.shoppingcart', ['subjects'=>$cart->items, 'total_price'=>$cart->total_price, 'totalQty'=>$cart->totalQty,]);
    }

    public function getCheckout()
    {
        if (!Session::has('cart'))
        {
            return view('udemy.shoppingcart');
        }
        $oldCart = Session::get('cart');
        $cart = new cart($oldCart);
        return view('udemy.checkout', ['subjects'=>$cart->items, 'total_price'=>$cart->total_price, 'totalQty'=>$cart->totalQty,]);
        // $total = $cart->total_price;
        // return view('shop.checkout', ['total' =>$total]);
    }

    public function postCheckout(Request $request)
    {
       if (!Session::has('cart'))
        {
            return view('udemy.shoppingcart');
        }
        $oldCart = Session::get('cart');
        $cart = new cart($oldCart); 
        $id = $request->input('id');
        // $request->session()->put('cart','$cart');
        // dd($cart);
        return redirect()->route('balance',[$id]);
    }

    public function requestEmail(Request $request)
    {
        // dd($request);    
        $custname = $request->input('name');
        $custemail = $request->input('Email');
        $custtextmessage = $request->input('$textmessage');


        Mail::raw($custtextmessage, function ($message) use ($custname, $custemail,$custtextmessage) {
        $message->to('niksyahir.hazemin@gmail.com');
        $message->from($custemail,$custname);
        });   
    }

//////////////////////////////////// STRIPE GATEWAY ////////////////////////////////////////////
        // Stripe::setApiKey('sk_test_awptxnVFJaZFQaQXjPg0CNvm');
        // try{
        //     Charge::create(array(
        //         "amount" => $cart->total_price,
        //         "currency" => "usd",
        //         "source" => $request->input('stripeToken'), // obtained with Stripe.js
        //         "description" => "Test Charge"
        //     ));
        // } catch (\Exception $e) {
        //     return redirect()->route('checkout')->with('error', $e->getMessage());
        // }
        // Session::forget('cart');
        // return redirect()->route('udemy.course')->with('success', 'Successfully purchased courses!');


    // public function getlogin(Request $request)
    // {
    //     $users = User::find($id);

    //     if(!Session::has('cart'))
    //     {
    //         $request->session()->push('user_id', 'user_id');
    //         return redirect()->route('udemy.checkout');
    //     }
    // }

   /* public function show(Request $request, $id)
    {
        value = $request->session()->get('');
    }*/


    ////////////new template for Nazrol Tech////////////////////////
    public function getHomepage()
    {
        return view('udemy.newhomepage');
    }

}
