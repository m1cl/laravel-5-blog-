@extends('main')
@section('title', '|Homepage')
@section('stylesheets')
  <!-- you can put your custom stylesheets here -->
@endsection
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>Welcome to my Blog</h1>
        <p class="lead">Thank you so much for visiting. This is my blog</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
      </div>
    </div>
  </div><!-- End of header .row -->

  <div class="container">
   <div class="row">
    <div class="row col-md-8">
      <div class="post">
        <h3>Post Title</h3>
        <p>Loretm ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="btn btn-primary" href="#">Read More</a>
      </div>
      <hr>
      <div class="post">
        <h3>Post Title</h3>
        <p>Loretm ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="btn btn-primary" href="#">Read More</a>
      </div>
      <hr>
      <div class="post">
        <h3>Post Title</h3>
        <p>Loretm ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="btn btn-primary" href="#">Read More</a>
      </div>
      <hr>
    </div>
    <div class="col-md-3 col-md-offset-1" style="">
      <h3>SIDEBAR</h3>
    </div>
@endsection
