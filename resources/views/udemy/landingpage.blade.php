<!DOCTYPE html>
<html lang="en">

  <head>
    <style>
      .image {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
        background-repeat:no-repeat;
      }

      .middle {
        color:black;
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%)
      }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Template</title>

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
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">
          <i class="fa fa-times"></i>
        </a>
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#top">Start Bootstrap</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="#top">Home</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="#about">About</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="#services">Services</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="#portfolio">Portfolio</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="#contact" onclick=$( "#menu-close").click();>Contact</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <header class="header" id="top" style="padding-top:320px;">
      <div class="container" style="font-color:rgb(255,255,255)">
      <span style="color:#000000;"><h1><strong>Be Able</strong></h1></span>
      <span style="color:#000000;"><p><h5>
        From programming to photography, take in-depth
        online courses and meet any challenge with skill.
      </h5></p></span>
       <form class="form-inline">
             <input class="form-control col-md-5" type="text" placeholder="What do you want to learn?" aria-label="Search">
           <button class="btn btn-success my-5 my-sm-0" type="submit">Search</button>
         </form>
    </div>
    </header>

    <!-- About -->
    <!-- <section id="about" class="about">

       <img src="../../startbootstrap-stylish-portfolio-master/img/menus.png">
    </section> -->
      <!-- <div class="container text-center">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <tr><th><img src="../public/uploads/explore.png"></th>
            <th><strong> Explore</strong> over 55,000 courses taught by expert instructors</span></th>

            <th colspan="1"><img src="../public/uploads/enroll.png"></th>
            <th><strong>Enroll</strong> in courses at any time, with life time access</th>

            <th colspan="1"><img src="../public/uploads/learn.png"></th>
            <th><strong>Learn</strong> at your own pace, from any device</th>
            </tr>
          </thead>
        </table>
      </div> -->
    

    <!-- Services -->
    <section id="services" class="services bg-primary text-white">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-10 mx-auto">
            <h1>Our Services</h2>
            <hr class="small">

            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="service-item">
                  <div class="img-circle" >
                    <img style="width:300px; height:200px;" src="../../startbootstrap-stylish-portfolio-master/img/learning instructor.jpg">
                  </div>
                  <h4>
                    <strong>Become an Instructor</strong>
                  </h4>
                  <p><h5>Teach what you love. Udemy gives you the tools to create an online course.</h5></p>
                  <a href="#" class="btn btn-light">Start teaching</a>
                </div>
              </div>

              <div class="col-md-6 col-sm-12">
                <div class="service-item">
                   <div class="img-circle">
                      <img style="width:300px; height:200px;" src="../../startbootstrap-stylish-portfolio-master/img/udemy business.png">
                   </div>
                  <h4>
                    <strong>Udemy for Business</strong>
                  </h4>
                  <p><h5>Get unlimited access to 2,000 of Udemy's top courses for your team.</h5></p>
                  <a href="#" class="btn btn-light">Get Udemy for Business</a>
                </div>
              </div>
            
            </div>
            <!-- /.row (nested) -->
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>

    <!-- Callout -->
    <!-- <aside class="callout">
      <div class="text-vertical-center">
        <h1>Vertically Centered Text</h1>
      </div>
    </aside> -->

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h2><strong>Our Top Courses</strong></h2>
            <hr class="small">
            <div class="row">

              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="../../startbootstrap-stylish-portfolio-master/img/portfolio-1.jpg">
                  </a>
                </div>
              </div>

              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="../../../startbootstrap-stylish-portfolio-master/img/portfolio-2.jpg">
                  </a>
                </div>
              </div>

              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="../../../startbootstrap-stylish-portfolio-master/img/portfolio-3.jpg">
                  </a>
                </div>
              </div>

              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="../../../startbootstrap-stylish-portfolio-master/img/portfolio-4.jpg">
                  </a>
                </div>
              </div>

            </div>
            <!-- /.row (nested) -->
            <a href="#" class="btn btn-dark">View More Items</a>
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary text-white">
      <div class="container text-center">
        <h3>The buttons below are impossible to resist.</h3>
        <a href="#" class="btn btn-lg btn-light">Click Me!</a>
        <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
      </div>
    </aside>

    <!-- Map -->
    <section id="contact" class="map">
      <!-- <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe> -->
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d69511.84762582126!2d101.57867509476579!3d3.1171639903569694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x31cc4c265ef6e4ad%3A0x42f3483c1e1906c3!2snazrol+tech!3m2!1d3.1098375!2d101.5842619!5e0!3m2!1sen!2s!4v1508987133041" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <br/>
      <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
      </small>
    </section>

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
