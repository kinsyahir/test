@extends('layouts.master')


@section('content')

	<div class="container" style="margin-top:100px">
		
		<h2> Add New Content </h2>
		<hr>

		<form method="POST" action="/content" enctype="multipart/form-data">

			{{ csrf_field() }}

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Course Name </label>
		    <select name="subject_id">
		    	@foreach ($courses as $course)
		    		<option value="{{ $course->id }}"> {{ $courses->course_name }}
		    		</option>
		    	@endforeach
		    </select>	
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlInput1">Upload Content </label>
		    <input type="file" class="form-control-file" name="upload_content" id="exampleFormControlFile1">
		    
		  </div>

		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Submit</button>
		  </div>

		  @include ('layouts.errors')

		</form>

	</div>

	<script>
		var selected_course_id = '{{ old('course_id') }}';
    	if (selected_course_id.length > 0)
    	{
			getSubjectTitle(selected_course_id);
    	}

		function getSubjectTitle(course_id)
		{
    		//getting course_id
    		// var course_id = $(this).val();
    		// console.log(course_id);

    		//sent course_id to controller
            var ajax_url = '/requirement/requirement/' + course_id;   
            $.get( ajax_url, function( data )
            {      
                console.log(data);

                $('#subject_id').empty().append('<option value="">Select Subject</option>');

                $.each(data, function(subject_id,subject_title)
                {
                	// console.log(data);
                	$('#subject_id').append('<option value='+subject_id+'>'+subject_title+'</option>');
            	})

            	var selected_subject_id = '{{ old('subject_id') }}';
            	if(selected_subject_id.length > 0)
            	{
                	$('#subject_id').val(selected_subject_id);
				}
            });   

        }

        $("#subject_id").change(function ()
        {
           	//getting course_id
            var course_id = $(this).val();
            getSubjectTitle(subject_id);
        });

	</script>

	<br>
	<br>

@endsection