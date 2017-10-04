@extends('shop.homepage')

@section('title')
	Laravel Shopping Cart 
@endsection 

@section('content')

	<style>
     
    </style>

	<div style="background-color:#009900; height:150px">
		<div class="container" style="font-color:rgb(255,255,255)">
			<br>
			<br>
			<i class="fa fa-shopping-bag" style="color:#fdfefe" aria-hidden="true">   / Shopping Cart</i>
			<span style="color:#fdfefe;"><h3>Shopping Cart</h3></span>
		</div>
	</div>
	<br/>
	<br/>

	<h5>Total: </h5><p><h2><span style="color:#00b300;">RM{{ $total }}</span></h2></p>

	@if(Session::has('cart'))
		<div class="container">
			<div class="row"> 
				<div class="col-md-3">
					<table width="527" height="93" border="0" class="table table-boardered table-hover table-striped" >	
							@foreach($subjects as $subject)
								<tr>
									<td width="165" height="89"><img src="{{ asset('storage/uploads/'.$subject['item']->subject_image) }}" style="width:140px;height:80px"></td>
									<td width="461" class="width=100px"><strong>{{ $subjects['item']['subject_title'] }}</strong>
								  		<p>{{ $subjects['item']['subject_desc'] }}</p>
								  		<p>RM{{ $subjects['subject_price'] }}
										<i class="fa fa-tag" aria-hidden="true"></i></p>
								  	</td>
								</tr>
							@endforeach
					</table>  
				</div>
	@endif
				<div class="col-md-9">
					<table class="table table-boardered table-hover table-striped">
						<tr>
							<td>New Payment Card</td>
						</tr>
						<tr>
							<td><input type="text" class="form-control" id="card_number" name="card_number" placeholder="Card Number"></td>
						</tr>
						<tr>
							<td><input type="text" class="form-control" id="month" name="month" placeholder="MM"></td>
							<td><input type="text" class="form-control" id="year" name="year" placeholder="YYYY"></td>
							<td><input type="text" class="form-control" id="code" name="code" placeholder="Security Code"></td>
						</tr>
						<tr>
							<td><input type="text" class="form-control" id="card_name" name="card_name" placeholder="Name on Card"></td>
						</tr>
						<button class="btn btn-primary" type="submit" value="submit" name="Complete Payment"></button>		
					</table>
				</div>
            </div> 
		</div>
	