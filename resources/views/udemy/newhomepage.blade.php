<!DOCTYPE html>
<html lang="en">

  <head>
    <style>

    .fixed-bg {
      background-image: url(../img/sofa.png);
      min-height: 120px;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    /*body {
      background-image: url(../img/sofa.png);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
    }*/

    div.sticky {
      position: -webkit-sticky;
      position: sticky;
      float: right;
      width: 100%;
      height: 60px;
      top: 0;
      padding: 10px;
      background-color: #142b47;
      /*border: 1px solid #c2c4c4;*/
      /*color: #635f5f;*/
      /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
    }

    .menu{
      width:100%;
      background:#142b47;
      overflow:auto;
      padding-left: 60px;
    }

    .menu ul{
      margin:0;
      padding:0;
      list-style:none;
      line-height:45px;
    }

    .menu li{
      float: left;
    }

    .menu ul li a{
      background:#142b47;
      text-decoration:none;
      width:130px;
      display:block;
      text-align:center;
      color:#f2f2f2;
      font-size: 18px;
      font-family:sans-serif;
      letter-spacing: 0.5px;
    }

    .menu li a:hover{
      color:#fff;
      opacity:0.5;
      font-size:19px; 
    }

    .buttonsearch{
      float:right;
      background:#318725;
      color:white;
      border-radius:2px;
      cursor:pointer;
      position:relative;
      padding: 16px;
      font-family: sans-serif;
      border:none;
      font-size: 16px;
      margin-right: 209px;

     }


    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nazrol Academy</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('startbootstrap-stylish-portfolio-master/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('startbootstrap-stylish-portfolio-master/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('startbootstrap-stylish-portfolio-master/css/stylish-portfolio.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('startbootstrap-stylish-portfolio-master/vendor/bootstrap/css/bootstrap.min.css') }}">

    <!-- Custom Fonts -->
    <link href="{{ asset('startbootstrap-stylish-portfolio-master/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('startbootstrap-stylish-portfolio-master/css/stylish-portfolio.css') }}" rel="stylesheet">

    <!-- Website CSS style -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico&subset=latin-ext,vietnamese" rel="stylesheet">
    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&subset=latin-ext,vietnamese" rel="stylesheet">

  </head>

  <body>
    <!-- Navigation -->
      <div class="sticky">
        <nav class="menu">
          <ul>
            <li><a href ="#"> Home</a></li>
            <li><a href ="#"> Categories</a></li>
            <li><a href ="#"> Addmissions</a></li>
            <li><a href ="#"> Contact</a></li>
            <li><a href ="#"> About</a></li>
          </ul>
        </nav>
      </div>
    
    <!-- Header -->
    <header class="courseheader" id="top" style="padding-top:130px;">
      <div class="container" style="font-color:rgb(255,255,255);" >
        <form style="margin-left:120px;padding-top:200px;">
          <span style="color:#ffffff;">
            <h1>
              <strong>Be Able and Start Learning</strong>
            </h1>
            <h5>
              From programming to photography, take in-depth
              online courses and meet challenge with skill.
            </h5>
          </span>
          <input type="text" style="width:700px;height:55px;font-size:16px;" placeholder="What do you want to learn?" aria-label="Search">
          <button id="buttonsearch" class="buttonsearch" type="submit" value="submit" name="Sign Up">search</button>
        </form>
      </div>
    </header>

    <div style="height:400px;background-color:white;padding-top:100px;">

      <center><h3><strong>You also can use Nazrol Academy to</strong></h3></center>

      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <hr class="small">
            <div class="row">

              <div class="col-md-3">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="../../startbootstrap-stylish-portfolio-master/img/portfolio-1.jpg">
                  </a>
                  <p>
                    <strong>Get Inspired</strong>
                    <br>Watch, listen and discuss: exciting ways to undertand the world around you.
                  </p>
                </div>
              </div>

              <div class="col-md-3">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="../../../startbootstrap-stylish-portfolio-master/img/portfolio-2.jpg">
                  </a>
                  <p>
                    <strong>Explore subjects</strong>
                    <br>Browse subject categoriesto explore new topics or look for reference material for a courseyou already studying.
                  </p>
                </div>
              </div>

              <div class="col-md-3">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="../../../startbootstrap-stylish-portfolio-master/img/portfolio-3.jpg">
                  </a>
                  <p>
                    <strong>Brush Up Your Skills</strong>
                    <br>Improve your study and employability skills,with our expertly created courses and resources.
                  </p>
                </div>
              </div>

              <div class="col-md-3">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="../../../startbootstrap-stylish-portfolio-master/img/portfolio-4.jpg">
                  </a>
                  <p>
                    <strong>Study Free Courses</strong>
                    <br>From 1 to 100 hours of learning - Discover hundreds of free coursesto inspire and inform everyone.
                  </p>
                </div>
              </div>

            </div>
            <!-- /.row (nested) -->
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>
    </div>

    <div class="fixed-bg"></div>



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
