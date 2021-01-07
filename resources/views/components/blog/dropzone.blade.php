<div class="" id="myAwesomeDropzone">
    <div class="dz-clickable" >
        <div class="dz-message needsclick">
        	Drop files <b>here</b> or <b>click</b> to upload.<br />
            <span class="dz-note needsclick">
                (This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)
            </span>
        </div>
    </div>	
</div>
@push('css')
<link href="{{asset('assets/plugins/dropzone/min/dropzone.min.css')}}" rel="stylesheet" />
@endpush
@push('scripts')
	<script src="{{asset('assets/plugins/dropzone/min/dropzone.min.js')}}"></script>
	<script>
		Dropzone.options.myAwesomeDropzone = {
				paramName: "image", // The name that will be used to transfer the file
				maxFilesize: 2, // MB
				accept: function(file, done) {
					if (file.name == "justinbieber.jpg") {
					done("Naha, you don't.");
					}
					else { done(); }
				}
				};
		Dropzone.autoDiscover = false;
		let myDropzone = $('#myAwesomeDropzone').dropzone({
			url:'#',
			
		});
		myDropzone.on("addedfile", function(file) {
			/* Maybe display some more file information on your page */
			console.log(file)
		});
	</script>
@endpush
