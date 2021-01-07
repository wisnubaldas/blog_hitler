<!DOCTYPE html>
<head>
	@include('back.includes.head')
</head>
@php
	$bodyClass = (!empty($boxedLayout)) ? 'boxed-layout ' : '';
	$bodyClass .= (!empty($paceTop)) ? 'pace-top ' : '';
	$bodyClass .= (!empty($bodyExtraClass)) ? $bodyExtraClass . ' ' : '';
@endphp
<body class="{{ $bodyClass }}">
	@include('back.includes.component.page-loader')
	
	@yield('content')
			
	@include('back.includes.page-js')
</body>
</html>
