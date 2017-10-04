@extends('shop.home')

@section('title')
	Laravel Shopping Cart 
@endsection 

@section('content')
@foreach ($subjects->chunk(6) as $subjectChunk)
	<br>
	<div class="container">
		<h5>Top Courses "Development"</h5>
		<br>
		<div class="row">
		  @foreach($subjectChunk as $subject)
			  @if($subject->course_id ==1)
				  <div class="col-sm-6 col-md-3">
				    <div class="thumbnail">
				      <img src={{ asset('storage/uploads/'.$subject->subject_image) }} alt="" style="height:200px; width:200px">
					      <div class="caption">
						      	<br>
						        <h5>{{ $subject->subject_title }}</h5>
						        <p>{{ $subject->subject_desc }}</p>
						        <span style="color:#2ecc71;"><strong><p>RM {{ $subject->subject_price }}</p></strong></span>
						        <div class="clearfix">
						        	<a href="{{ route('shop.addToCart', ['id' => $subject->id]) }}" class="btn btn-primary" role="button">add to cart</a>
						      	</div>
					      </div>
				    </div>
				  </div>
			  @endif
		  @endforeach
		</div>

		<br>
		<br>
		<h5>Top Courses "Business"</h5>
		<br>
		<div class="row">
 		  @foreach($subjectChunk as $subject)
			  @if($subject->course_id ==2)
				  <div class="col-sm-6 col-md-3">
				    <div class="thumbnail">
				      <img src={{ asset('storage/uploads/'.$subject->subject_image) }} alt="" style="height:200px; width:200px">
					      <div class="caption">
						      	<br>
						        <h5>{{ $subject->subject_title }}</h5>
						        <p>{{ $subject->subject_desc }}</p>
						        <span style="color:#2ecc71;"><strong><p>RM {{ $subject->subject_price }}</p></strong></span>
						        <div class="clearfix">
						        	<a href="{{ route('shop.addToCart', ['id' => $subject->id]) }}" class="btn btn-primary" role="button">add to cart</a>
						      	</div>
					      </div>
				    </div>
				  </div>
			  @endif
		  @endforeach
		</div>
		<br>
		<br>

	</div>
@endforeach
@endsection

