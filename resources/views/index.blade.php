@extends('base')

@section('pageTitle', 'Title from section')

@section('mainMenu')

<header class="header">
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt=""></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navigation-nav">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a class="section-scroll" href="#wrapper">Home</a></li>
          <li><a href="#landing-offer" @if ($content->activeLink == "/") style ="border: 1px solid green" @endif>About</a></li>
          <li><a href="#features-section" @if ($content->activeLink == "Services") style ="border: 1px solid green" @endif>Services</a></li>
          <li><a href="#team-section" @if ($content->activeLink == "Team") style ="border: 1px solid green" @endif>Team</a></li>
          <li><a href="#screenshots-section" @if ($content->activeLink == "Works") style ="border: 1px solid green" @endif>Works</a></li>
          <li><a href="#prices-section" @if ($content->activeLink == "Prices") style ="border: 1px solid green" @endif>Prices</a></li>
          <li><a href="#subscribe-section" @if ($content->activeLink == "Subscribe") style ="border: 1px solid green" @endif>Subscribe</a></li>
          <li><a href="#contact-section" @if ($content->activeLink == "Contact") style ="border: 1px solid green" @endif>Contact</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav>
</header>


@endsection


@section('scriptSection')
@parent
<!-- Чтоб не переписало отцовскую -->

<script src="assets/js/jquery.countdown.js"></script>
<script src="assets/js/jquery.navbar-scroll.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="assets/js/jquery.gmaps.js"></script>
<script src="assets/js/main.js"></script>

@endsection