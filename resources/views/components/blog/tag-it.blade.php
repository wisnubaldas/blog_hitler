<div>
    <input type="text" id="tagInput" data-role="tagsinput" tagClass="label label-dark" class="form-control" value="jQuery,Script,Net">
    {{-- <select multiple data-role="tagsinput">
        <option value="jQuery">jQuery</option>
        <option value="Angular">Angular</option>
        <option value="React">React</option>
        <option value="Vue">Vue</option>
    </select> --}}

</div>
@push('scripts')
<script src="{{asset('assets/plugins/Bootstrap-4-Tag-Input/tagsinput.js')}}"></script>
<script>
    const option = {
        tagClass: function (item) {
            console.log(item)
            return 'label label-dark';
        },
        focusClass: 'focus',
        itemValue: function (item) {
            return item ? item.toString() : item;
        },
        itemText: function (item) {
            return this.itemValue(item);
        },
        itemTitle: function (item) {
            return null;
        },
        freeInput: true,
        addOnBlur: true,
        maxTags: undefined,
        maxChars: undefined,
        confirmKeys: [13, 44],
        delimiter: ',',
        delimiterRegex: null,
        cancelConfirmKeysOnEmpty: false,
        onTagExists: function (item, $tag) {
            $tag.hide().fadeIn();
        },
        trimValue: false,
        allowDuplicates: false,
        triggerChange: true
    };
    $('#tagInput').tagsinput();
</script>
@endpush
@push('css')
<link href="{{asset('assets/plugins/Bootstrap-4-Tag-Input/tagsinput.css')}}" rel="stylesheet" />
@endpush
