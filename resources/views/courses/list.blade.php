<div class="panel panel-info">
				<div class="panel-heading">Manage Course</div>

				<hr>

				<div class="panel-body">

					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>Course Name</th>
								<th>Course Description</th>
								<th>Action</th>
								<!-- <th>Seller</th> -->
							</tr>
						</thead>
						
						<tbody>

							@foreach ($courses as $course)

								<tr>
									<td>{{ $course->course_name }}</td>
									<td>{{ $course->course_desc }}</td>
									<td>
										<form method="POST" action="" align="center">										
											<input type="hidden" name="_method" value="DELETE">
											{{ csrf_field() }}
											<a href="{{url('/course', $course->id)}}" class="btn btn-warning btn-mini">Edit</a>
											<button type="button" class="btn btn-danger delete">Delete</button>
										</form>
									</td>
								</tr>

							@endforeach

						</tbody>
					</table>

					<?php /*{{ $products->appends(Request::except('page'))->links() }} */ ?>
				</div>
			</div>