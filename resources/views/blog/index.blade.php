@extends('blog.includes.layout')
@section('title','bleketek')

@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row row-space-30">
                @switch($content)
                    @case('miskin')
                        @include('blog.content.penduduk_miskin')
                    @break
                    @case('about')
                        @include('blog.content.about')
                        @break
                    @case('contact')
                        @include('blog.content.contact')
                        @break
                    @default
                        @include('blog.content.default')
                @endswitch
                
                @include('blog.includes.sidebar_right')
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #content -->
@endsection