
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


  <div style="background-color:#25406b; height:160px">
    <div class="container" style="font-color:rgb(255,255,255)">
      <br>
      <br>
      <i class="fa fa-shopping-bag" style="color:#fdfefe" aria-hidden="true">   / Shopping Cart</i>
      <span style="color:#fdfefe;"><h3>Shopping Cart</h3></span>
    </div>
  </div> 


    <!-- add-to-cart -->
      @if(Session::has('cart'))
        <div class="container" style="padding-top:50px;">
          <div class="row"> 
            <div class="col-md-9">
              <span style="font-size:22px">{{ $totalQty }} Courses in Cart</span>
              <br>
              <table class="table table-boardered table-hover table-striped" height="93" border="0" > 
                  @foreach($subjects as $subject)
                    <tr>
                      <td width="165" height="89"><img src="{{ asset('storage/uploads/'.$subject['item']->subject_image) }}" style="width:140px;height:80px"></td>
                      <td width="461" class="width=100px"><strong>{{ $subject['item']['subject_title'] }}</strong>
                      <p>{{ $subject['item']['subject_desc'] }}</p></td>
                      <td width="114">
                        <form method="POST" action="" align="center">                   
                          <input type="hidden" name="_method" value="DELETE">
                          {{ csrf_field() }}
                          <type="text">Remove
                        </form>
                      </td>
                      <td width="165" align="center" style="color:#00b300">
                        <strong>RM{{ $subject['subject_price'] }}</strong>
                        <i class="fa fa-tag" aria-hidden="true"></i>
                      </td>
                    </tr>
                  @endforeach
              </table>  
            </div>
            
            <div class="col-md-3">
              <br>
              <h5>Total: </h5><p><h2><span style="color:#00b300;">RM{{ $total_price }}</span></h2></p>
              <button type="button" class="btn btn-success" style="padding: 7px 95px;" id="btncheckout" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Checkout</button>
              <hr><form class="form-inline">
                      <input class="width:60px" type="text" placeholder="Apply Coupon Code" aria-label="Search">
                    <button class="btn btn-success" style="padding:4px 15px; border-radius: 1px;" type="submit">Apply</button>
                  </form>

            </div>
          </div>
          @else

          <br>
          <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3" align="center">
              <h2>No Items in Cart!</h2>
            </div>
          </div>
        </div>
      @endif

      <div class="modal fade" id="exampleModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" >Please sign up to checkout</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <div class="modal-body">
                <form method="POST" action="{{ route('signup') }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Username">
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                  </div>

                  <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>

                  <!-- total price -->

                  <input type="checkbox" name="vehicle" value="Bike"> Check here for exciting deals and personalized course.<br>
                  </br>
                  <button type="submit" class="btn btn-danger btn-block" id="btnsignup">Sign Up</button>
                </form>
              </div>
            <div class="modal-footer">
              Already have an account? <button id="btnsignin" data-toggle="modal" data-target="#modalSignIn" class="btn btn-primary">Sign In</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modalSignIn" tabindex="1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Log In to Your Udemy Account!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{ route('signin') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <!-- total price and user id -->
                <button type="submit" class="btn btn-success" id="btnsignin" style="padding:7px 205px;">Sign In</button>
              </form>
              <!-- <input type="hidden" name="id" value="2"> -->
            </div>
            <div class="modal-footer">
              Don't have an account? <button type="button" class="btn btn-primary"> Sign Up</button>
            </div>
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

    <script>
      $(document).ready(function(){
        //the popup for creating new group
        var modal = document.getElementById('exampleModal');
        var btn = document.getElementById("btncheckout");
        var span = document.getElementsByClassName("close")[0];
        var btnsignup = document.getElementById('btnsignup');

        $(btn).on('click',function(){
          modal.style.display = "block";
          //modal.show();
        });
        
        $(span).on('click',function(){
          modal.style.display = "none";
        });

        $(window).on('click',function(){
          if(event.target == modal){
            modal.style.display = "none";
          }
        });
  
        var modal1 = document.getElementById('loginModal');
        var btn1 = document.getElementById("btnsignin");
        var span1 = document.getElementsByClassName("close")[0];

        $(btn1).on('click',function(){
          modal1.style.display = "block";
          //modal.show();
        });
        
        $(span1).on('click',function(){
          modal1.style.display = "none";
        });

        $(window).on('click',function(){
          if(event.target == modal1){
            modal1.style.display = "none";
          }
        });
      });
    </script>

  </body>
</html>
