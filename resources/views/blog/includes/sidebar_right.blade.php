<!-- begin col-3 -->
<div class="col-md-3">
    <!-- begin section-container -->
    <div class="section-container">
        <div class="input-group sidebar-search">
            <input type="text" class="form-control" placeholder="Search Our Stories..." />
            <span class="input-group-btn">
                <button class="btn btn-inverse" type="button"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </div>
    <!-- end section-container -->
    <x-blog.categories />
    <!-- begin section-container -->
    <div class="section-container">
        <h4 class="section-title"><span>Recent Post</span></h4>
        <ul class="sidebar-recent-post">
            @foreach ($artikel as $item)
                <li>
                    <div class="info">
                        <h4 class="title"><a href="#">{{$item->title}}</a></h4>
                        <div class="date">{{$item->created_at}}</div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- end section-container -->
    <!-- begin section-container -->
    <div class="section-container">
        <h4 class="section-title"><span>Follow Us</span></h4>
        <ul class="sidebar-social-list">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </div>
    <!-- end section-container -->
</div>
<!-- end col-3 -->