
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="keywords" content="Site keywords here">
      <meta name="description" content="">
      <meta name='copyright' content=''>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>{{ isset($title) ? $title  . ' | ' : '' }} 2-SIX</title>
      <link rel="shortcut icon" type="image/x-icon" href="/img/ds.png" />

      <!--
        - favicon
      -->


      <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('pu/css/bootstrap.min.css')}}">
      <!-- Nice Select CSS -->
      <link rel="stylesheet" href="{{asset('pu/css/nice-select.css')}}">
      <!-- Font Awesome CSS -->
      <link rel="stylesheet" href="{{asset('pu/css/font-awesome.min.css')}}">
      <!-- icofont CSS -->
      <link rel="stylesheet" href="{{asset('pu/css/icofont.css')}}">
      <!-- Slicknav -->
      <link rel="stylesheet" href="{{asset('pu/css/slicknav.min.css')}}">
      <!-- Owl Carousel CSS -->
      <link rel="stylesheet" href="{{asset('pu/css/owl-carousel.css')}}">
      <!-- Datepicker CSS -->
      <link rel="stylesheet" href="{{asset('pu/css/datepicker.css')}}">
      <!-- Animate CSS -->
      <link rel="stylesheet" href="{{asset('pu/css/animate.min.css')}}">
      <!-- Magnific Popup CSS -->
      <link rel="stylesheet" href="{{asset('pu/css/magnific-popup.css')}}">

      <!-- Medipro CSS -->
      <link rel="stylesheet" href="{{asset('pu/css/normalize.css')}}">
      <link rel="stylesheet" href="{{asset('pu/style.css')}}">
      <link rel="stylesheet" href="{{asset('pu/css/responsive.css')}}">

  </head>
  <body>

@include('auth.nav')
@yield('section')
