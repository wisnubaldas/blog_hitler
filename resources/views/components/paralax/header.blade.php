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
                    <span class="text-theme">Dinas Sosial</span> Kota Tangerang
                </span>
            </a>
        </div>
        <!-- end navbar-header -->
        <!-- begin navbar-collapse -->
        <div class="collapse navbar-collapse" id="header-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="active dropdown">
                    <a href="#home" data-click="scroll-to-target" data-toggle="dropdown">HOME </a>
                    {{-- <ul class="dropdown-menu dropdown-menu-left animated fadeInDown">
                        <li><a href="index.html">Page with Transparent Header</a></li>
                        <li><a href="index_inverse_header.html">Page with Inverse Header</a></li>
                        <li><a href="index_default_header.html">Page with White Header</a></li>
                        <li><a href="extra_element.html">Extra Element</a></li>
                    </ul> --}}
                </li>
                <li><a href="#about" data-click="scroll-to-target">ABOUT</a></li>
                <li><a href="{{url('/home')}}" >BERITA</a></li>
                <li><a href="#service" data-click="scroll-to-target">SERVICES</a></li>
                <li><a href="#work" data-click="scroll-to-target">GALERI</a></li>
                {{-- <li><a href="#client" data-click="scroll-to-target">CLIENT</a></li> --}}
                {{-- <li><a href="#pricing" data-click="scroll-to-target">PRICING</a></li> --}}
                <li><a href="#contact" data-click="scroll-to-target">CONTACT</a></li>
                {{-- <li><a href="{{url('/home')}}">BLOG</a></li> --}}
            </ul>
        </div>
        <!-- end navbar-collapse -->
    </div>
    <!-- end container -->
</div>
<!-- end #header -->