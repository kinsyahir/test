@extends('layouts.master')


@section('content')

	<div class="container" style="margin-top:100px">
		
		<h2> Add New Content </h2>
		<hr>

		<form method="POST" action="/content" enctype="multipart/form-data">

			{{ csrf_field() }}

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Content Title </label>
		    <select name="subject_id">
		    	@foreach ($subjects as $subject)
		    		<option value="{{ $subject->id }}"> {{ $subject->subject_title }}
		    		</option>
		    	@endforeach
		    </select>	
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Content Title </label>
		    <input type="text" class="form-control" name="content_title" id="exampleFormControlInput1" placeholder="Introduction to PHP">
		  </div>

		  <div class="form-group">Upload a video</label>
		    <input type="file" class="form-control-file" name="content_video" id="exampleFormControlFile1">
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

