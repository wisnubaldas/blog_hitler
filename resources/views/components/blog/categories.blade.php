<div>
    <!-- begin section-container -->
    <div class="section-container">
        <h4 class="section-title"><span>Categories</span></h4>
        <ul class="sidebar-list">
            @foreach ($categories as $item)
                <li><a href="{{$item->url}}">{{$item->name}} ({{$item->artikel->count()}})</a></li>
            @endforeach
        </ul>
    </div>
    <!-- end section-container -->
</div>