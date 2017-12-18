<div class="panel panel-info">
	<div class="panel-heading col-md-6"><h3>Manage Requirement</h3></div>
		<div class="col-md-6 text-right">
			<form action="{{ url('requirement-requirement') }}" method="get" class="form-inline">
				<div class="form-group">
					<input type="text" class="form-control" name="search" placeholder="Keyword" value="{{ isset($search) ? $search : ''}}">
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
							<th>Requirement File(Html)</th>
							<th>Action</th>
						</tr>
					</thead>
						
					<tbody>
						@foreach($requirements as $requirement)
							<tr>
								<td>{{ $requirement->course->course_name }}</td>
								<td>{{ $requirement->subject->subject_title }}</td>
								<td>{{ $requirement->requirement }}</td>
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