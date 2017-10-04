@extends('shop.home')

@section('title')
	Laravel Shopping Cart 
@endsection 

@section('content')

	@if(Session::has('cart'))

		<div class="container">
			<div class="panel-body">

				<table class="table table-bordered table-hover table-striped ">
					<thead>
						<tr>
							<th>Subject Image</th>
							<th>Subject Title</th>
							<th align="center">Subject Price</th>
							<th>Action</th>
						</tr>
					</thead>
									
					<tbody>
						@foreach($subjects as $subject)
							<tr>
								<td>{{ $subject['item']['subject_image'] }}</td>
								<td>{{ $subject['item']['subject_title'] }}</td>
								<td align="center">RM{{ $subject['subject_price'] }}</td>
								<td>
									<form method="POST" action="" align="center">										
										<input type="hidden" name="_method" value="DELETE">
										{{ csrf_field() }}
										<a href="" class="btn btn-warning btn-mini">Edit</a>
										<button type="button" class="btn btn-danger delete">Delete</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>

			</div>

			<div class="row">
				<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
					<strong>Total: RM{{ $total_price }}</strong>
				</div>
			</div>

			<br>

			<div class="row" align="right">
				<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
					<a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
				</div>
			</div>
			<br>

			@else

			<div class="row">
				<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
					<h2>No Items in Cart!</h2>
				</div>
			</div>

		</div>
	@endif

@endsection