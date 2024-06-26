@extends('errors::layout')
@section('title', 'Page introuvable')
@section('message')
<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">


  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="One page parallax responsive HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Bingo HTML Template v1.0">

  <!-- Favicon -->
  <link rel="stylesheet" href="{{asset('plugins/themefisher-font/style.css')}}">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="{{asset('plugins/lightbox2/css/lightbox.min.css')}}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">


</head>
<body id="body">

  <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <!--
  End Preloader
  ==================================== -->

<section class="page-404 section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>500</h1>
				<h2>Erreur</h2>
				<p>Il y a une erreur au niveau du server</p>
				<a href="{{route('ebandeli')}}" class="btn btn-main mt-20">Accueil</a>
			</div>
		</div>
	</div>
</section>


<!--
    Essential Scripts
    =====================================-->
<!-- Main jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap4 -->
<script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- Parallax -->
<script src="{{asset('plugins/parallax/jquery.parallax-1.1.3.js')}}"></script>
<!-- lightbox -->
<script src="{{asset('plugins/lightbox2/js/lightbox.min.js')}}"></script>
<!-- Owl Carousel -->
<script src="{{asset('plugins/slick/slick.min.js')}}"></script>
<!-- filter -->
<script src="{{asset('plugins/filterizr/jquery.filterizr.min.js')}}"></script>
<!-- Smooth Scroll js -->
<script src="{{asset('plugins/smooth-scroll/smooth-scroll.min.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="{{asset('plugins/google-map/gmap.js')}}"></script>

<!-- Custom js -->
<script src="{{asset('js/script.js')}}"></script>

</body>

</html>

@endsection
