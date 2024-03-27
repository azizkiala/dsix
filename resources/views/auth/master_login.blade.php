<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
        <title>{{ isset($title) ? $title  . ' | ' : '' }} 2-SIX</title>
        <link rel="shortcut icon" type="image/x-icon" href="/img/ds.png" />

		<!-- Site favicon -->

		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="{{asset('d/vendors/images/favicon-32x32.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="{{asset('d/vendors/images/favicon-16x16.png')}}"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('d/vendors/styles/core.css')}}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('d/vendors/styles/icon-font.min.css')}}"
		/>
        <link
			rel="stylesheet"
			type="text/css"
			href="{{asset('d/src/plugins/jquery-steps/jquery.steps.css')}}"
		/>

        <link rel="stylesheet" type="text/css" href="{{asset('d/vendors/styles/style.css')}}" />
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
             <!--
        - custom css link
      -->
      <link rel="stylesheet" href="{{asset('pu/assets/css/style.css')}}">

      <!--
        - google font link
      -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

      <!--
        - preload images
      -->
      <link rel="preload" as="image" href="{{asset('pu/assets/images/hero-banner.png')}}">
      <link rel="preload" as="image" href="{{asset('pu/assets/images/hero-abs-1.png')}}" media="min-width(768px)">
      <link rel="preload" as="image" href="{{asset('pu/assets/images/hero-abs-2.png')}}" media="min-width(768px)">

	</head>
    <body id="top">

@include('auth.nav_login')
    @yield('section')
