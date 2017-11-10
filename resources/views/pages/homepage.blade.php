@extends('layouts.main')

@section('customCss')
<link href="{{ asset("/css/homepage.css") }}" rel="stylesheet">
@endsection

@section('title')
Home
@endsection

@section('content')
<main>
  <div class="middenBlok">
    <div class="wrapper">
      <img src="http://hdimages.org/wp-content/uploads/2017/03/placeholder-image4.jpg" class="img-responsive" alt="">
        <div class="iconbar">
          <a href="#"><img src="https://d30y9cdsu7xlg0.cloudfront.net/png/5982-200.png" width="30px" height="30px" style="margin-left: 15px; opacity:0.8;" alt=""></a>
          <a href="#"><img src="https://cdn.worldvectorlogo.com/logos/facebook-like.svg" width="30px" height="30px" style="margin-left: 15px; opacity:0.8; " alt=""></a>
          <p style="float:right; padding:0; padding-right:15px;">Reacties: 4 Likes: 2</p>
        </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <a href="#" style="float:right;">Lees meer..</a></p>
    </div>
  </div>
  <div class="middenBlok">
    <div class="wrapper">
      <img src="http://hdimages.org/wp-content/uploads/2017/03/placeholder-image4.jpg" class="img-responsive" alt="">
        <div class="iconbar">
          <a href="#"><img src="https://d30y9cdsu7xlg0.cloudfront.net/png/5982-200.png" width="30px" height="30px" style="margin-left: 15px; opacity:0.8;" alt=""></a>
          <a href="#"><img src="https://cdn.worldvectorlogo.com/logos/facebook-like.svg" width="30px" height="30px" style="margin-left: 15px; opacity:0.8; " alt=""></a>
          <p style="float:right; padding:0; padding-right:15px;">Reacties: 4 Likes: 2</p>
        </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <a href="#" style="float:right;">Lees meer..</a></p>
    </div>
  </div>
</main>
@endsection
