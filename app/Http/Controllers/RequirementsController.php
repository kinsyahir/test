<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject;

use App\Course;

use App\Requirement;


class RequirementsController extends Controller
{
	public function getCourses(Request $request)
	{
        $search = $request->input('search');
        $courses=Course::all();//get data from table
        $subjects=Subject::all();
        $requirements=Requirement::all();
		return view('requirement.requirement', compact('courses', 'requirements', 'subjects', 'search'));//sent data to view
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

        $post = new requirement;

        $post->course_id = request('course_id');
        $post->subject_id = request('subject_id');

        if ($request->hasFile('requirement')) {
            # code...
            //dd($request->subject_image);
           $path = $request ->requirement->store('public/uploads');
           $post->requirement = $request->requirement->hashName();
        }

        $post->save();
    }

}
