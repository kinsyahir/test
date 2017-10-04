@extends('layouts.master')


@section('content')

	<div class="container" style="margin-top:100px">
		
		<h2> Add New Subject </h2>
		<hr>

		<form method="POST" action="/subject" enctype="multipart/form-data">

			{{ csrf_field() }}

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Subject Title </label>
		    <select name="course_id">
		    	@foreach ($courses as $course)
		    		<option value="{{ $course->id }}"> {{ $course->course_name }}
		    		</option>
		    	@endforeach
		    </select>	
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Subject Title </label>
		    <input type="text" class="form-control" name="subject_title" id="exampleFormControlInput1" placeholder="The Web Developer Bootcamp">
		  </div>
		     
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Subject Description</label>
		    <textarea class="form-control" name="subject_desc" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Subject price </label>
		    <input type="text" class="form-control" name="subject_price" id="exampleFormControlInput1">
		  </div>

		  <div class="form-group">Choose Your Image</label>
		    <input type="file" class="form-control-file" name="subject_image" id="exampleFormControlFile1">
		  </div>

		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Submit</button>
		  </div>

		  @include ('layouts.errors')

		</form>

	</div>

	<br>
	<br>

@endsection

