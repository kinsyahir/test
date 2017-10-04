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

	@if(Session::has('cart'))
		<div class="container">
			<div class="row"> 
				<div class="col-md-3">
					<table class="table table-boardered table-hover table-striped" height="93" border="0" >	
							@foreach($subjects as $subject)
								<tr>
									<td width="165" height="89"><img src="{{ asset('storage/uploads/'.$subject['item']->subject_image) }}" style="width:140px;height:80px"></td>
									<td width="461" class="width=100px"><strong>{{ $subject['item']['subject_title'] }}</strong>
								  		<p>{{ $subject['item']['subject_desc'] }}</p>
								  		<p>RM{{ $subject['subject_price'] }}
										<i class="fa fa-tag" aria-hidden="true"></i></p>
								  	</td>
								</tr>
							@endforeach
					</table>  
				</div>
				
				<div class="col-md-9">
					<br>
					<h5>Total: </h5><p><h2><span style="color:#00b300;">RM{{ $total_price }}</span></h2></p>
					<button type="button" class="btn btn-success" style="padding: 7px 95px;" id="btncheckout" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Checkout</button>
					<hr><form class="form-inline">
	    	   	   		<input class="width:60px" type="text" placeholder="Apply Coupon Code" aria-label="Search">
	    		   		<button class="btn btn-success" style="padding:4px 15px; border-radius: 1px;" type="submit">Apply</button>
  		   			</form>
				</div>
			</div>
	@endif