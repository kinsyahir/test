@extends('layouts.master')


@section('content')

	<div class="container">
		<div class="jumbotron" style="margin-top:110px;">

			<center>
				<h3>Add Subject Description</h3>
				<br>
				<form method="POST" action="/description" enctype="multipart/form-data">
					{{ csrf_field() }}

					<span>Course Name: </span>
					<select style="width: 250px" class="courseCategory" id="course_id" name="course_id">
						<option value="0" disabled="true" selected="true">Select</option>
						@foreach($courses as $course)
							<option value="{{ $course->id }}">{{ $course->course_name }}</option>
						@endforeach
					</select>

					<span>Subject Name: </span>
					<select style="width: 250px" class="subject_title" name="subject_id">
						<option value="0" disabled="true" selected="true">Select</option>
					</select>

					<div class="form-group" style="padding-top:40px;"></label>
					    <input style="margin-left:100px;" type="file" class="form-control-file" name="description" id="exampleFormControlFile1">
					</div>

					<div class="form-group" style="padding-top:10px;">
					  	<button type="submit" class="btn btn-primary">Submit</button>
					</div>

				</form>
			</center>
		</div>

		<div class="col-md-6 text-right">
			<form action="{{ route('') }}" method="get" class="form-inline">
				<div class="form-group">
					<input type="text" class="form-control" name="search" placeholder="Keyword">
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">Search</button>
				</div>
			</form>
		</div>
		@include('description.list')
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){

			$(document).on('change','.courseCategory',function(){
				// console.log("it changes");

				var course_id=$(this).val();
				// console.log(course_id);

				var div=$(this).parent();

				// var op=" ";
				var op=[];

				$.ajax({
					type: 'get',
					url: '{!!URL::to('findSubjectTitleDesc')!!}',
					data:{'id':course_id},
					success:function(response){
						// console.log('success');

						console.log('response',response);

						// console.log(data.length);

						op.push('<option value="0" selected disabled>choose subject</option>');

						for(var i=0; i<response.length;i++)
						{
							// console.log('id', response[i].id);
							op.push('<option value="'+response[i].id+'">'+response[i].subject_title+'</option>');
							// op+='<option value="'response[i].id+'">'+response[i].subject_title+'</option>';
						}
						console.log('op',op);

						div.find('.subject_title').html(" ");
						div.find('.subject_title').append(op);
					},
					error:function(){

					}
				});
			});

		});
	</script>


@endsection



