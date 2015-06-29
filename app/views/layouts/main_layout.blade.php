<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Arkode | Game Studio</title>
	<meta name="description" content="Game Studio based in Semarang, Indonesia">
	<meta name="author" content="Arkode Studio">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="assets/images/icon24.png">
	<!-- <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png"> -->

	<!-- CSS
  ================================================== -->
	{{ HTML::style('http://fonts.googleapis.com/css?family=Titillium+Web') }}
	{{ HTML::style('http://fonts.googleapis.com/css?family=Play') }}
	{{ HTML::style('assets/css/site/base.css') }}
	{{ HTML::style('assets/css/site/skeleton.css') }}
	{{ HTML::style('assets/css/site/layout.css') }}
	{{ HTML::style('assets/css/site/slimmenu.css') }}
	{{ HTML::style('assets/css/site/flexslider.css') }}
	{{ HTML::style('assets/css/site/superslides.css') }}


	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Javascript
  ================================================== -->
  	{{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js') }}
  	{{ HTML::script('assets/js/site/jquery.sticky.js') }}
  	{{ HTML::script('assets/js/site/jquery.smooth-scroll.min.js') }}
  	{{ HTML::script('assets/js/site/snap.svg-min.js') }}

</head>

<body>

@yield('content')

</body>
</html>