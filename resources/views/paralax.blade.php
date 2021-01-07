<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Dinas Sosial | Pemerintah Kota Tangerang</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{asset('blog/plugins/bootstrap3/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('blog/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
	<link href="{{asset('blog/plugins/animate/animate.min.css')}}" rel="stylesheet" />
	<link href="{{asset('blog/css/one-page-parallax/style.min.css')}}" rel="stylesheet" />
	<link href="{{asset('blog/css/one-page-parallax/style-responsive.min.css')}}" rel="stylesheet" />
	<link href="{{asset('blog/css/one-page-parallax/theme/default.css')}}" id="theme" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('blog/plugins/pace/pace.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body data-spy="scroll" data-target="#header-navbar" data-offset="51">
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <x-paralax.header />
        <x-paralax.home />
        <x-paralax.about />
        {{-- <x-paralax.milistone /> --}}
        {{-- <x-paralax.team /> --}}
        <x-paralax.quote />
        <x-paralax.service />
        {{-- <x-paralax.action /> --}}
        <x-paralax.work :galery="$galery"/>
        {{-- <x-paralax.client /> --}}
        {{-- <x-paralax.pricing /> --}}
        <x-paralax.contact />
        <x-paralax.footer />
        <x-paralax.panel />
    </div>
    <!-- end #page-container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('blog/plugins/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('blog/plugins/bootstrap3/js/bootstrap.min.js')}}"></script>
	<!--[if lt IE 9]>
		<script src="crossbrowserjs/html5shiv.js"></script>
		<script src="crossbrowserjs/respond.min.js"></script>
		<script src="crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="{{asset('blog/plugins/js-cookie/js.cookie.js')}}"></script>
	<script src="{{asset('blog/plugins/scrollMonitor/scrollMonitor.js')}}"></script>
	<script src="{{asset('blog/js/one-page-parallax/apps.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>    
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
</body>
</html>