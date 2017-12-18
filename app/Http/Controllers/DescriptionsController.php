<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject;

use App\Course;

use App\Description;

class DescriptionsController extends Controller
{
	public function getCourses()
	{
        $courses=Course::all();//get data from table
        $subjects=Subject::all();
        $descriptions=Description::all();
		return view('description.description', compact('courses', 'subjects', 'descriptions'));//sent data to view
	}

    public function findSubjectTitle(Request $request)
    {
        $data=Subject::select('subject_title','id')->where('course_id', $request->id)->get();
        
        //$request->id (here is)
        return response()->json($data);//then sent this data to ajax success
    }

    public function store(Request $request)
    {
        // $this->validate(request(), [
        //     'course_id' => 'required',
        //     'subject_id' => 'required'
        // ]);

        $post = new Description;

        $post->course_id = request('course_id');
        $post->subject_id = request('subject_id');

        if ($request->hasFile('description')) {
	        $path = $request ->description->store('public/uploads');
	        $post->description = $request->description->hashName();
        }

        $post->save();
    }

    //to get data in COURSE TABLE 
    public function course()
    {
        return $this->belongsTo('App/Course');
    }
}
