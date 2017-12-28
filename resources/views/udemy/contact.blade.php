
<!DOCTYPE html>
<html lang="en">
@include('partials.nav')

  <head>
    <style>
       @import "compass/css3";

      @import url(https://fonts.googleapis.com/css?family=Merriweather);
      $red: #e74c3c;

      *,
      *:before, 
      *:after {
         @include box-sizing(border-box); 
      }

      html, body {
        background: #f1f1f1;
        font-family: 'Merriweather', sans-serif;
        padding: 1em;
      }

      h1 {
         text-align: center;
         color: #a8a8a8;
         @include text-shadow(1px 1px 0 rgba(white, 1));
      }

      form {
         max-width: 600px;
         text-align: center;
         margin: 20px auto;
        
        input, textarea {
           border:0; outline:0;
           padding: 1em;
           @include border-radius(8px);
           display: block;
           width: 100%;
           margin-top: 1em;
           font-family: 'Merriweather', sans-serif;
           @include box-shadow(0 1px 1px rgba(black, 0.1));
           resize: none;
          
          &:focus {
             @include box-shadow(0 0px 2px rgba($red, 1)!important);
          }
        }
        
        #input-submit {
           color: white; 
           background: $red;
           cursor: pointer;
          
          &:hover {
             @include box-shadow(0 1px 1px 1px rgba(#aaa, 0.6)); 
          }
        }
        
        textarea {
            height: 126px;
        }
      }

      .half {
        float: left;
        width: 48%;
        margin-bottom: 1em;
      }

      .right { width: 50%; }

      .left {
           margin-right: 2%; 
      }

      @media (max-width: 480px) {
        .half {
           width: 100%; 
           float: none;
           margin-bottom: 0; 
        }
      }

      /* Clearfix */
      .cf:before,
      .cf:after {
          content: " "; /* 1 */
          display: table; /* 2 */
      }

      .cf:after {
          clear: both;
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
    <h1>Elegant Contact Form</h1>
<form class="cf">
  <div class="half left cf">
    <input type="text" id="input-name" placeholder="Name">
    <input type="email" id="input-email" placeholder="Email address">
    <input type="text" id="input-subject" placeholder="Subject">
  </div>
  <div class="half right cf">
    <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
  </div>  
  <input type="submit" value="Submit" id="input-submit">
</form>

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

</html>
