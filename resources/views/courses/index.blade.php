
@extends ('layouts.master')


@section('content')


<!-- Header - set the background image for the header in the line below -->
    <header>
      <img src="{{asset('assets/images/image.jpg')}}">
    </header>

    <!-- Content section -->
    <section class="py-5">
      <div class="container">
        <h4>Course in Development</h4>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <h4>Course in Business</h4>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
    </section>

    <!-- Image Section - set the background image for the header in the line below -->
    <section class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
      <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
      <div style="height: 200px;"></div>
    </section>

    <!-- Content section -->
    <section class="py-5">
      <div class="container">
        <h1>Course in Business</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
      </div>
    </section>



@endsection