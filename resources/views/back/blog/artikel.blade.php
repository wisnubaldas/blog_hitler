@extends('back.index')
@section('title', 'Create Artikel')

@section('content')
{{$html_class->breadcrumb([
	'title'=>'Create Artikel',
	'desc'=>'Bikin artikel',
	'links'=>[
		'Home'=>'/admin',
		'Artikel'=>'/admin/artikel',
	],
])}}
<!-- begin panel -->
<div class="panel panel-inverse">
	<div class="panel-heading">
		<div class="btn-group btn-group-toggle pull-right" data-toggle="buttons">
			<button class="btn btn-primary btn-sm" id="btn-b">Save</button>
		  </div>
		<h4 class="panel-title">Create Artikel</h4>
	</div>
	<div class="panel-body">
		<x-blog.tabs :tabs="['Grid Artikel','Create Artikel']">
			<x-slot name="tab1">
				<x-blog.grid :option="['url'=>'/admin/artikel/grid','coloumn'=>[
					['data' =>'id', 'name'=>'id'],
					['data' =>'title', 'name'=>'title'],
					['data' =>'body', 'name'=>'body'],
					['data' =>'image', 'name'=>'image'],
					['data' =>'action', 'name'=>'action'],
				]]"/>
			</x-slot>
			<x-slot name="tab2">
					<form id="form-blog" enctype="multipart/form-data" name="blog">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Title</label>
									<input type="text" class="form-control" name="title" id="title"/>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="image">Upload Image</label>
									{{-- <x-blog.dropzone /> --}}
									<input type="file" name="image" id="image" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<label>Tipe Artikel</label>
								<div class="form-group">
									<x-blog.select2 id="multiple-select2" :dataOption="$type_artikel" multiple="multiple" style="width: 100%;" name="type_artikel"/>
								</div>
							</div>
							<div class="col-md-12">
								<x-blog.editor id="editor"></x-blog.editor>
							</div>
						</div>
						
					</form>
			</x-slot>
		</x-blog.tabs>
	</div>
</div>

<!-- end panel -->
@endsection
@push('scripts')
<script src="{{asset('assets/plugins/gritter/js/jquery.gritter.js')}}"></script>
<script>
	$('#btn-b').on('click',function(a){
		const url = "{{route('admin.artikel.create')}}";
		var data = CKEDITOR.instances.editor.getData();
		let frm = new FormData();
		frm.append('title',$('#title').val());
		frm.append('body',data);
		frm.append('type_artikel',$('#multiple-select2').val())
		frm.append('image', $('input[type=file]')[0].files[0]); 
		$.ajax({
					type: "POST",
					url: url,
					data: frm,
					processData: false,
  					contentType: false,
					error: function(json) {
						// console.log(json);
						my_app.show_gritter('ERROR: '+json.status,json.responseText)
					}
				})
				.done(function( msg ) {
					$('#title').val(null);
					function CKupdate(){
						for ( instance in CKEDITOR.instances ){
							CKEDITOR.instances[instance].updateElement();
						}
						CKEDITOR.instances[instance].setData('');
					}
					CKupdate();
					$('#multiple-select2').val(null).trigger('change');;
					$('input[type=file]')[0].files[0] = [];
					$('input[type=file]').val(null)
					my_app.show_gritter('SUCCESS','Data telah ter insert di database,')
				});
	});
</script>
@endpush
@push('css')
<link href="{{asset('assets/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
@endpush
