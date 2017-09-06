<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\subject;

class SubjectsController extends Controller
{
        public function create()
    {
        // /subjects/create
        $subjects = subject::all();
        return view('subjects.create', compact('subjects'));
    }

     	public function store(Request $request)
    {
        // POST /subject

        //return $request->all();

        $this->validate(request(), [
            'subject_title' => 'required',
            'subject_desc' => 'required'
        ]);

        $post = new subject;

        $post->subject_title = request('subject_title');
        $post->subject_desc = request('subject_desc');
        $post->subject_price = request('subject_price');

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
    }

}
