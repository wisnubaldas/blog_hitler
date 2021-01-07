<div>
    <!-- begin nav-tabs -->
        <ul class="nav nav-tabs">
            @foreach ($tabs as $item)
                <li class="nav-items">
                    <a href="#tab-{{$loop->index}}" data-toggle="tab" class="nav-link {{($loop->index == 0)?'active':''}}">
                        <span class="d-sm-none">{{$item}}</span>
                        <span class="d-sm-block d-none">{{$item}}</span>
                    </a>
                </li>
            @endforeach
        </ul>
        <!-- end nav-tabs -->
        <!-- begin tab-content -->
        <div class="tab-content">
            <!-- begin tab-pane -->
            <div class="tab-pane fade active show" id="tab-0">
                {{$tab1}}
            </div>
            <!-- end tab-pane -->
            <!-- begin tab-pane -->
            <div class="tab-pane fade" id="tab-1">
                {{$tab2}}
            </div>
            <!-- end tab-pane -->
        </div>
        <!-- end tab-content -->
</div>