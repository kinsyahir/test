@extends('shop.homepage')

@section('title')
	Laravel Shopping Cart 
@endsection 

@section('content')

	<div style="background-color:#009900; height:150px">
		<div class="container" style="font-color:rgb(255,255,255)">
			<br>
			<br>
			<i class="fa fa-shopping-bag" style="color:#fdfefe" aria-hidden="true">   / Shopping Cart / Checkout</i>
			<span style="color:#fdfefe;"><h3>Checkout</h3></span>
		</div>
	</div>
	<br/>
	<br/>

	@if(Session::has('cart'))

		<div class="container">
		
				<div class="row"> 
					<div class="col-md-4">
						<span style="font-size:20px"> Your Items ({{ $totalQty }})</span><hr>
						<table width="350" border="0" class="table table-boardered table-hover table-striped" >	
							@foreach($subjects as $subject)
								<tr>
									<td><img src="{{ asset('storage/uploads/'.$subject['item']->subject_image) }}" style="width:100px;height:80px"></td>
									<td style="font-size:12px;">{{ $subject['item']['subject_title'] }}
									  	<p>{{ $subject['item']['subject_desc'] }}</p>
									  	<p>RM{{ $subject['subject_price'] }}
										<i class="fa fa-tag" aria-hidden="true"></i></p>
									 </td>
								</tr>
							@endforeach
						</table>  
					</div>
	@endif

					<div class="col-md-8" boarder="1">
						<span style="color:#00b300;"><h3>Total: RM{{ $total_price }}</h3></span><hr>
						<table class="table table-boardered table-hover table striped">
							<form method="POST" action ="{{ route('shop.balance') }}" enctype="multipart/form-data">
								{{ csrf_field() }}
								<tr>
									<th>New Payment Card</th>
								</tr>
								<tr>
									<td><input type="text" class="form-control" id="card_number" name="card_number" placeholder="Card Number" required></td>
								</tr>
								<tr>
									<td><input type="text" class="form-control" id="month" name="month" placeholder="MM" required></td>
									<td><input type="text" class="form-control" id="year" name="year" placeholder="YYYY" required></td>
									<td><input type="text" class="form-control" id="code" name="code" placeholder="Security Code" required></td>
								</tr>
								<tr>
									<td colspan="3"><input type="text" class="form-control" id="card_name" name="card_name" placeholder="Name on Card" required></td>
								</tr>

								<input type="hidden" name="id" value="1">
												
						</table>

						@if(Session::has('cart'))
						<button class="btn btn-danger" type="submit" value="submit" name="Complete Payment">Pay RM{{$total_price}}</button>
						@endif

						</form>
					</div>
            	</div> 
		</div>
@endsection
	