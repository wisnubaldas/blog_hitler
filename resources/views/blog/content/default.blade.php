<!-- begin col-9 -->
<div class="col-md-9">
    
    <!-- begin post-list -->
    <ul class="post-list">
        @foreach ($artikel as $item)
        <li>
            <!-- begin post-left-info -->
            <div class="post-left-info">
                <div class="post-date">
                    <span class="day">21</span>
                    <span class="month">OCT</span>
                </div>
                <div class="post-likes">
                    <i class="fa fa-heart-o"></i>
                    <span class="number">1,292</span>
                </div>
            </div>
            <!-- end post-left-info -->
            <!-- begin post-content -->
            <div class="post-content">
                <!-- begin post-image -->
                <div class="post-image">
                    <a href="#"><img src="{{$item->image}}" alt="" /></a>
                </div>
                <!-- end post-image -->
                <!-- begin post-info -->
                <div class="post-info">
                    <h4 class="post-title">
                        <a href="post_detail.html">{{$item->title}}</a>
                    </h4>
                    <div class="post-by">
                        Posted By <a href="#">Admin</a> <span class="divider">|</span> <a href="#">Artikel</a>, <a href="#">Berita</a>
                    </div>
                    <div class="post-desc">
                         {!! $item->body !!}
                    </div>
                </div>
                <!-- end post-info -->
                <!-- begin read-btn-container -->
                <div class="read-btn-container">
                    <a href="#" class="read-btn">Read More <i class="fa fa-angle-double-right"></i></a>
                </div>
                <!-- end read-btn-container -->
            </div>
            <!-- end post-content -->
        </li>
        @endforeach
    </ul>
    <!-- end post-list -->
    
    <!-- begin pagination -->
    <div class="section-container">
        <div class="pagination-container text-center">
            <ul class="pagination m-t-0 m-b-0">
                <li class="disabled"><a href="javascript:;">Prev</a></li>
                <li class="active"><a href="javascript:;">1</a></li>
                <li><a href="javascript:;">2</a></li>
                <li><a href="javascript:;">3</a></li>
                <li><span class="text">...</span></li>
                <li><a href="javascript:;">1797</a></li>
                <li><a href="javascript:;">Next</a></li>
            </ul>
        </div>
    </div>
    <!-- end pagination -->
</div>
<!-- end col-9 -->