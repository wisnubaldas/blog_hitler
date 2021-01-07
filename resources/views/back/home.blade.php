@extends('back.index')
@section('title', 'Blank Page')

@section('content')
{{$html_class->breadcrumb([
	'title'=>'Page Ngeblank',
	'desc'=>'Halaman ini ngeblank bosss....',
	'links'=>[
		'Home'=>'/admin/home',
		'Ngeblank'=>'javascript:;',
	],
])}}
<!-- begin panel -->
<div class="panel panel-inverse">
	<div class="panel-heading">
		<div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
		</div>
		<h4 class="panel-title">Panel Title here</h4>
	</div>
	<div class="panel-body">
		Panel Content Here
	</div>
</div>
<!-- end panel -->
@endsection