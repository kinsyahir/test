
<!DOCTYPE html>
<html lang="en">
@include('partials.nav')

  <head>
    <style>
        div.sticky 
        {
          position: -webkit-sticky;
          position: sticky;
          float: right;
          width: 350px;
          height: 380px;
          top: 0;
          padding: 5px;
          background-color: #ffffff;
          border: 1px solid #c2c4c4;
          color: #635f5f;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .button 
        {
          /*background-color: #4CAF50;*/
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        }

        .button4 
        {
          background-color: white;
          color: black;
          border: 1px solid #a39999;
        }

        .button4:hover 
        {
          background-color: #e7e7e7;
        }

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
    <!-- Navigation -->
    

    <!-- Header -->
    @foreach($subjects as $subjects)
      @if($subjects->id == $id)
      <div style="background-color:rgb(70, 74, 81); height:300px;padding-top:50px;">
        <div style="color:#ffffff;padding-right:150px;">
            <img style="height:50%;width:30%;float:left;padding-left:100px;padding-right:30px;" src={{ asset('storage/uploads/'.$subjects->subject_image) }}>
                <h1>{{ $subjects->subject_title }}</h1>
                <p><h4>{{ $subjects->subject_desc }}</h4></p>
                <div style="padding:left;">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>       
        </div>
      </div>  

    <!-- Subject Content -->
    <div class="container">
      <div class="sticky">
          <h2 style="color:#00b300;padding-top:20px;margin-left:30px;"><strong>RM {{ $subjects->subject_price }} </strong>
            <i class="fa fa-tag" aria-hidden="true"></i>
          </h2>
          <button class="button" style="background-color: #f44336;padding: 14px 110px;margin-left:30px;" 
            id="btncheckout" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Buy Now</button>
          <button class="button button4" id="cart" style="padding: 14px 100px;margin-left:30px;">Add To Cart</button>
          <input type="hidden" value="{{$subjects->id}}" id="id">
          <input type="hidden" id="user_id" value="1">
          <p style="margin-left:30px;padding-top:20px;">
            <strong>Includes:</strong>
            <br><i class="fa fa-file-pdf-o" aria-hidden="true"></i> 2 Articles
            <br><i class="fa fa-film" aria-hidden="true"></i> 12 hours on-demand videos
            <br><i class="fa fa-spinner" aria-hidden="true"></i> Full lifetime access
          </p>
      </div>
      @endif
    @endforeach

      <?php
        echo html_entity_decode($contents); 
      ?>

      <div class="col-md-8">
        <?php
          echo html_entity_decode($contentsDesc); 
        ?>
      </div>

        <div style="padding-bottom:2500px">
        </div>
    </div>

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
                <input type="hidden" id="user_id" value="1">

                <button type="submit" class="btn btn-success" id="btnsignin" style="padding:7px 205px;">Sign In</button>
              </form>
            </div>
            <div class="modal-footer">
              Don't have an account? <button type="button" class="btn btn-primary"> Sign Up</button>
            </div>
          </div>
        </div>
      </div>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary text-white">
      <div class="container">

      </div>
    </aside>

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


  </body>

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

      $('#cart').on('click', function() {
        var id = $('#id').val();
        console.log(id);
        window.location = '/nazrol.shoppingcart/' +id;
      });

        //$(document).ready(function(){
    });

          // $('#logout').click(function(){
          //  var action = "logout";
          //  $.ajax({
          //    url:"action.php",
          //    method:"POST",
          //    data:{action:action},
          //    success:function(data)
          //    {
          //      location.reload();
          //    }

          //  });
          // });
    </script>

</html>
