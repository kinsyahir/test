<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\subject;

use App\content;

use App\Requirement;

use App\Description;

use Illuminate\Support\Facades\Storage;

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
        $requirements = Requirement::all();
        return view('content.upload', compact('content', 'subject', 'requirements'));
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
    public function getContentDetails($id)
    {
        $requirements = Requirement::where('subject_id','=', $id)->first();
        $descriptions = Description::where('subject_id','=', $id)->first();

        $subjects = Subject::find($id)->get();
        $id = $id;

        $contents = Storage::get('public/uploads/'.$requirements->requirement);

        $contentsDesc = Storage::get('public/uploads/'.$descriptions->description);

        
        return view('udemy.content')->with('subjects', $subjects)->with('id', $id)
        ->with('requirements', $requirements)->with('contents', $contents)->with('descriptions', $descriptions)->with('contentsDesc', $contentsDesc);
    }

    //Return subject title for course
    public function getSubjectTitle($course_id){

        // echo $course_id;
        $subject = Subject::whereCourseId($course_id)->pluck('subject_title', 'id');

        return $subject;
    }
}
