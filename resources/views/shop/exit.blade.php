@extends('shop.homepageexit')
@section('title')
	LARAVEL
@endsection 

@section('content')

<style>

  .header {
      padding: 1em;
      color: white;
      background-color:#009900;
      clear: left;
      text-align: center;
  }

  .container1 {
      position: relative;
      width: 100%;
  }

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

  .container1:hover .image {
    opacity: 0.3;
  }

  .container1:hover .middle {
    opacity: 1;
  }

  .text {
    background-color: #4CAF50;
    color: white;
    font-size: 16px;
    padding: 16px 32px;
  }
</style>

<div style="background-color:#009900; height:80px;font-family:New Century Schoolbook, serif;">
    <div class="container" style="font-color:rgb(255,255,255)">
      <br>
      <span style="color:#fdfefe;"><h3>UDEMY</h3></span>
    </div>
</div>
  
<br>
<br>  
<div class="container">

  <div class="jumbotron" align="center">
    <h4>Thank you buying courses from Udemy.com! </h4>      
    <p>Now you can login to Udemy.com to learn the online courses.</p>
    
  </div>

    <div class="container1" align="center">
      <div class="image" style="background-image:url('../public/uploads/learning.png'); background-repeat:no-repeat; height:400px; align:center;">
      <div class="middle">
        <h1>Love learning on Udemy?</h1>
          <h6>Now your entire organization can learn new
             skills with Udemy for Business. Get
             unlimited access to over 2,0000 top rated
             Udemy courses for your co-workers and
             employees in a single learning platform.
          </h6>
            <div class="text">Find Out Here</div>
      </div>
    </div>
  </div>

  <!-- modal -->
  <div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Successfully!!</h4>
        </div>
        <div class="modal-body">
          <p>Name:</p>
          <p>User ID:</p>
          <p>Date:</p>
          <table class="table table-boardered table-hover table-striped" boarder="1">
            <td>Course</td>
            <td>Subject</td>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


</div>

@endsection