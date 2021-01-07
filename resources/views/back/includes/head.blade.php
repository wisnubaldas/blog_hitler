<meta charset="utf-8" />
<title>{{config('app.name', 'Belekok')}} | @yield('title')</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- ================== BEGIN BASE CSS STYLE ================== -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />

<link href="{{asset('assets/css/base.css')}}" rel="stylesheet" />
<!-- ================== END BASE CSS STYLE ================== -->
@stack('css')
<!-- ================== BEGIN BASE JS ================== -->
<script src="{{asset('assets/js/pace.js')}}"></script>
<!-- ================== END BASE JS ================== -->

