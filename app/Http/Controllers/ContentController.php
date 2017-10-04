<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\subject;

use App\content;

class ContentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // /courses/create
        $subjects = Subject::all();
        $contents = Content::all();
        return view('content.upload', compact('content', 'subject'));
    }

    public function store()
    {
    	$this->validate(request(), [
            'content_title' => 'required',
            'content_video' => 'required'
        ]);

        $post = new content;

        $post->content_title = request('content_title');
        $post->content_video = request('content_video');
        $post->subject_id = request('subject_id');

        ///dd($request->file('public/uploads'));

 		if ($request->file('content_video')) {
            # code...
            $path = $request ->content_video->store('public/uploads');
            $post->content_video = $request->content_video->hashName();
        }

        // Save it to database
        $post->save();

        // and then redirect to the home page
        return redirect('/');
    }
}
