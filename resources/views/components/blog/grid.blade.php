<div>
    <table id="data-table-default" class="table table-striped table-bordered">
        <thead>
            <tr>
                @foreach ($option['coloumn'] as $item)
                    <th>{{Str::title($item['name'])}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div>
@push('css')
	
@endpush
@push('scripts')
	<script>
        const url = "{{$option['url']}}";
        const column = @json($option['coloumn']);
        console.log(column);
        var handleDataTableDefault = function() {
            "use strict";
            
            if ($('#data-table-default').length !== 0) {
                $('#data-table-default').DataTable({
                    responsive: true,
                    processing: true,
                    serverSide: true,
                    ajax: url,
                    columns:column
                });
            }
        };

        var TableManageDefault = function () {
            "use strict";
            return {
                //main function
                init: function () {
                    handleDataTableDefault();
                }
            };
        }();

		$(document).ready(function() {
			TableManageDefault.init();
		});
	</script>
@endpush