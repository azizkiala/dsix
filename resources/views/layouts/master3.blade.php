<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{ isset($title) ? $title  . ' | ' : '' }} 2-SIX</title>
    <link rel="shortcut icon" type="image/x-icon" href="/img/ds.png" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	
	<link href="{{asset('../../../../global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('../../../../global_assets/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('../../../../global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('../../../../global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('../../../../global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
	<script src="{{asset('../../../../global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
	<script src="{{asset('../../../../global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script src="{{asset('../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script src="{{asset('../../../../global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
	<script src="{{asset('../../../../global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

	<script src="{{asset('assets/js/app.js')}}"></script>
	
	
</head>

<body class="navbar-top">
@include('layouts.nav1')
@yield('section')