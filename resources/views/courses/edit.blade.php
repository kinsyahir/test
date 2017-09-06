@extends('layouts.master')


@section('content')

	<div class="container" style="margin-top:100px">
		
		<h2> Edit Course </h2>
		<hr>

		{!! Form::open(['route' => ['CoursesController@edit', $course->id], 'method'=>'PUT', 'files' => true ]) !!}

			  <div class="form-group">
			    {{Form::label('course_name', 'Course Name')}}
			 php artisa   {{Form::text('course_name', $course->course_name, ['class' => 'form-control', 'placeholder' => 'Software Development'])}}
			  </div>
			     
			  <div class="form-group">
			  	{{Form::label('course_desc', 'Course Description')}}
			    {{Form::textarea('course_desc', $course->course_desc, ['class' => 'form-control', 'placeholder' => 'Software Development'])}}
			  </div>

			  <div class="form-group">
			  	<button type="submit" class="btn btn-primary">Submit</button>
			  </div>

		{!! Form::close() !!}

		@include ('layouts.errors')
	</div>

	<br>
	<br>
	@include ('courses.list')

@endsection