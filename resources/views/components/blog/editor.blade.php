<div>
	<textarea name="editor1" id="{{$id}}" rows="10" cols="80" placeholder="Write artikel here.....!!"></textarea>
</div>
@push('scripts')
<script src="{{asset('assets/plugins/ckeditor4/ckeditor.js')}}"></script>
<script>
	const idx = "{{$id}}";
	CKEDITOR.addCss('.cke_editable { font-size: 16px; line-height: 0;}');
	CKEDITOR.replace( idx,{
		toolbar: [
			{ name: 'clipboard', items: [ 'Undo', 'Redo' ] },
			{ name: 'styles', items: [ 'Styles', 'Format' ] },
			{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat' ] },
			{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
			{ name: 'links', items: [ 'Link', 'Unlink' ] },
			{ name: 'insert', items: [ 'Image', 'EmbedSemantic', 'Table' ] },
			{ name: 'tools', items: [ 'Maximize' ] },
			// { name: 'editing', items: [ 'Scayt' ] }
		],
		extraPlugins: 'print,format,font,colorbutton,justify,uploadimage,smiley',
      	uploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

		// Configure your file manager integration. This example uses CKFinder 3 for PHP.
		filebrowserBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html',
		filebrowserImageBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html?type=Images',
		filebrowserUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Images',
		// height: 560,
		removeDialogTabs: 'image:advanced;link:advanced'

	});
	/* let data = CKEDITOR.instances.editor1.getData();
	console.log(data) */
</script>
@endpush
