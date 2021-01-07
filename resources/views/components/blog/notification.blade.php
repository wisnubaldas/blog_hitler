<div>
    <a href="javascript:;" id="add-max" class="btn btn-sm btn-default">Demo</a>
</div>
@push('scripts')
<script src="{{asset('assets/plugins/gritter/js/jquery.gritter.js')}}"></script>
<script>
    const text = "{{$text}}";
    const title = "{{$title}}";
    $.gritter.add({
			title: title,
			text: text,
			sticky: false,
			image: '../assets/img/user/user-8.jpg',
			before_open: function() {
				if($('.gritter-item-wrapper').length === 3) {
					return false;
				}
			}
		});
	
</script>
@endpush
@push('css')
<link href="{{asset('assets/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
@endpush