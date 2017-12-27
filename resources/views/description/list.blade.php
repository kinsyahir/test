<div class="panel panel-info">
	<div class="panel-heading"><h3>Manage Descriptions</h3></div>

	<div class="col-md-6 text-right">
		<form action="{{ url('description-description') }}" method="get" class="form-inline">
			<div class="form-group">
				<input type="text" class="form-control" name="search" placeholder="Keyword">
			</div>
			<div class="form-group">
				<button class="btn btn-success" type="submit">Search</button>
			</div>
		</form>
	</div>

		<hr>
			<div class="panel-body">
				<table class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th>Course Name</th>
							<th>Subject Title</th>
							<th>Description File(Html)</th>
							<th>Action</th>
						</tr>
					</thead>
						
					<tbody>
						@foreach($descriptions as $description)
							<tr>
								<td>{{ $description->course->course_name }}</td>
								<td>{{ $description->subject->subject_title }}</td>
								<td>{{ $description->description }}</td>
								<td>
									<form method="POST" action="" align="center">										
										<input type="hidden" name="_method" value="Edit">
										{{ csrf_field() }}
										<!-- <a href="{{url('/course', $course->id)}}" class="btn btn-warning btn-mini">Edit</a> -->
										<button type="button" class="btn btn-danger delete">Edit</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
	</div>
</div>