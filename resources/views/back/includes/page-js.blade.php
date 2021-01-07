<script src="{{asset('assets/js/appz.js')}}"></script>
<script>
	$.ajaxSetup({
    	headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	
	$(document).ready(function() {
		App.init();
	});
</script>
@stack('scripts')
