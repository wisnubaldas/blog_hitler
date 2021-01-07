@php($html_class->boot())
@php($html_class->footer = true)
<!DOCTYPE html>
<html lang="{{'en'}}">
<head>
	@include('back.includes.head')
</head>
<body class="{{ $html_class->bodyClass }}">
	@include('back.includes.component.page-loader')
	
	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed {{ $html_class->pageContainerClass }}">
		
		@include('back.includes.header')
		
		@includeWhen($html_class->topMenu, 'back.includes.top-menu')
		
		@includeWhen(!$html_class->sidebarHide, 'back.includes.sidebar')
		
		@includeWhen($html_class->sidebarTwo, 'back.includes.sidebar-right')
		
		<div id="content" class="content {{ $html_class->contentClass }}">
			@yield('content')
		</div>
		
		@includeWhen($html_class->footer, 'back.includes.footer')
		
		@include('back.includes.component.theme-panel')
		
		@include('back.includes.component.scroll-top-btn')
		
	</div>
	
	@include('back.includes.page-js')
</body>
</html>

