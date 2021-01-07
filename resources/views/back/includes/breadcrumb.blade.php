<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    @foreach ($var['links'] as $i =>$v)
        @if ($loop->last)
            <li class="breadcrumb-item active">{{$i}}</li>
        @else
            <li class="breadcrumb-item"><a href="{{$v}}">{{$i}}</a></li>
        @endif
    @endforeach
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">{{$var['title']}} <small>{{$var['desc']}}</small></h1>
<!-- end page-header -->