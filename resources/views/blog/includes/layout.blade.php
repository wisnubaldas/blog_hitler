<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
    <title>{{config('app.name')}} | @yield('title')</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	
    <link href="{{asset('blog/css/main.css')}}" rel="stylesheet" />
    <link href="{{asset('blog/css/theme/default.css')}}" id="theme" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('blog/js/pace.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
    @include('blog.includes.headers')
    @include('blog.includes.pages_titles')
    @yield('content')
    @include('blog.includes.footer')
    @include('blog.includes.copyright')
    {{-- @include('blog.includes.panel') --}}
	<!-- ================== BEGIN BASE JS ================== -->
	<!--[if lt IE 9]>
		<script src="../blog/crossbrowserjs/html5shiv.js"></script>
		<script src="../blog/crossbrowserjs/respond.min.js"></script>
		<script src="../blog/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="{{asset('blog/js/appz.js')}}"></script>
    
	<!-- ================== END BASE JS ================== -->
	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
</body>
</html>