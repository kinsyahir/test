@extends('shop.home')

@section('content')
<div class="container" align="center" >
	<div class="col-md-4 col-md-offset-4">

		<h1>Sign In</h1>
		@if(count($errors)>0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
			</div>
		@endif

		<br>
		<form action="" method="post">

			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Username</label>
				<input type="text" id="" name="name" class="form-control">
			</div>

			<div class="form-group">
				<label for="email">E-Mail</label>
				<input type="text" id="email" name="email" class="form-control">
			</div>

			<div class="form-group">
				<label for="email">Password</label>
				<input type="password" id="password" name="password" class="form-control">
			</div>

			<button type="submit" class="btn btn-primary">Sign In</button>
		</form>

	</div>
</div>
@endsection
