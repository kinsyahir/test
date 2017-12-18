
<!DOCTYPE html>
<html lang="en">
@include('partials.nav')

  <head>
    <style>


    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Udemy Courses</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('startbootstrap-stylish-portfolio-master/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('startbootstrap-stylish-portfolio-master/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('startbootstrap-stylish-portfolio-master/css/stylish-portfolio.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('startbootstrap-stylish-portfolio-master/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('startbootstrap-stylish-portfolio-master/css/stylish-portfolio.css') }}" rel="stylesheet">

    <!-- Website CSS style -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&subset=latin-ext,vietnamese" rel="stylesheet">
    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="product.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&subset=latin-ext,vietnamese" rel="stylesheet">

  </head>

  <body>  


  <div style="background-color:#25406b; height:160px;">
    <div class="container" style="font-color:rgb(255,255,255)">
      <br>
      <br>
      <i class="fa fa-shopping-bag" style="color:#fdfefe" aria-hidden="true">   / Checkout</i>
      <span style="color:#fdfefe;"><h2>Checkout</h2></span>
    </div>
  </div> 

  @if(Session::has('cart'))

    <div class="container" style="padding-top:50px;">
    
        <div class="row"> 
          <div class="col-md-4">
            <span style="font-size:20px"> Your Items ({{ $totalQty }})</span><hr>
            <!-- <div id="charge-color" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
              {{ Session::get('error') }}
            </div> -->
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
            <span style="color:#00b300;"><h3><strong>Total: RM{{ $total_price }}</strong></h3></span><hr>
            <table class="table table-boardered table-hover table striped">
              <form method="POST" action ="{{ route('checkout') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <tr>
                  <th>New Payment Card</th>
                </tr>
                <tr>
                  <td><input type="text" name="card_name" placeholder="Card Holder Name" required></td>
                  <td><input type="text" name="card_number" placeholder=" Credit Card Number" required></td>  
                </tr>
                <!-- <tr>
                  <div id="charge-error" class="alert alert-danger {{ Session::has('error') ? 'hidden' : '' }}">
                    {{ Session::get('error') }}
                  </div> 
                </tr> -->
                <tr>
                  <td><input type="text" name="security_code" placeholder="CVC" required></td>
                  <td><input type="text" name="MM" placeholder="Expiration Month" required></td>
                  <td><input type="text" name="YYYY" placeholder="Expiration Year" required></td>
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

    <!-- Footer -->
    @include('partials.footer')
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('startbootstrap-stylish-portfolio-master/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('startbootstrap-stylish-portfolio-master/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('startbootstrap-stylish-portfolio-master/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/stylish-portfolio.js') }}"></script>
    <script src="{{ asset('startbootstrap-stylish-portfolio-master/js/stylish-portfolio.js') }}"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ URL::to('src/js/checkout.js') }}"></script>
  </body>
</html>
