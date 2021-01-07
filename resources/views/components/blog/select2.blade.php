<div>
    <select class="multiple-select2 form-control" {{$attributes}} >
        @foreach ($dataOption as $item)
            <option value="{{$item['value']}}">{{$item['text']}}</option>
        @endforeach
    </select>
</div>
@push('scripts')
<script src="{{asset('assets/plugins/select2/dist/js/select2.min.js')}}"></script>
<script>
    $("#multiple-select2").select2({placeholder:"Select a state"});
</script>
<script>
	
</script>
@endpush
@push('css')
<link href="{{asset('assets/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet" />
@endpush