@extends('layouts.master')


@section('content')

	<div class="container" style="margin-top:100px">
		
		<h2> Add New Course </h2>
		<hr>

		<form method="POST" action="/course">

			{{ csrf_field() }}

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Course Name</label>
		    <input type="text" class="form-control" name="course_name" id="exampleFormControlInput1" placeholder="Development">
		  </div>
		     
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Course Description</label>
		    <textarea class="form-control" name="course_desc" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>

		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Submit</button>
		  </div>

		  @include ('layouts.errors')

		</form>

	</div>

	<br>
	<br>
	@include ('courses.list')

@endsection

