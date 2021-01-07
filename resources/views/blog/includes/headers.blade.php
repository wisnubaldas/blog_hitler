<!-- begin #header -->
<div id="header" class="header navbar navbar-transparent navbar-fixed-top">
    <!-- begin container -->
    <div class="container">
        <!-- begin navbar-header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">
                {{-- <span class="brand-logo"></span> --}}
                <span class="brand-text">
                    {{config('app.name')}} 
                </span>
            </a>
        </div>
        <!-- end navbar-header -->
        <!-- begin navbar-collapse -->
        <div class="collapse navbar-collapse" id="header-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/')}}">HOME</a></li>
                <li class="dropdown">
                    <a href="javascript:;" data-toggle="dropdown">KEPENDUDUKAN <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('frontend.penduduk.miskin')}}">Angka Kemiskinan</a></li>
                        <li><a href="#">Dasboard</a></li>
                        <li><a href="{{route('login')}}">Login</a></li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="javascript:;" data-toggle="dropdown">POSTS <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        @foreach ($html_class->categories() as $item)
                        <li><a href="{{$item->url}}">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                </li> --}}
                <li><a href="{{url('/#about')}}">ABOUT ME</a></li>
                <li><a href="{{url('/#contact')}}">CONTACT US</a></li>
            </ul>
        </div>
        <!-- end navbar-collapse -->
    </div>
    <!-- end container -->
</div>
<!-- end #header -->