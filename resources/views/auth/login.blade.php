@extends('back.empty', ['paceTop' => true])
@section('title', 'Login Page')

@section('content')
<div class="login-cover">
    <div class="login-cover-image" style="background-image: url(../assets/img/login-bg/login-bg-17.jpg)" data-id="login-cover-image"></div>
    <div class="login-cover-bg"></div>
</div>
<!-- begin login -->
<div class="login login-v2" data-pageload-addclass="animated fadeIn">
    <!-- begin brand -->
    <div class="login-header">
        <div class="brand">
            <span class="logo"></span> {{ __('Login') }}
            <small>responsive bootstrap 3 admin template</small>
        </div>
        <div class="icon">
            <i class="fa fa-lock"></i>
        </div>
    </div>
    <!-- end brand -->
    <!-- begin login-content -->
    <div class="login-content">
        <form method="POST" action="{{ route('login') }}" class="margin-bottom-0">
            @csrf
            <div class="form-group m-b-20">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-control-lg" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group m-b-20">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-control-lg" placeholder="{{ __('Password') }}" name="password" required autocomplete="current-password" />
            </div>
            <div class="checkbox checkbox-css m-b-20">
                <input type="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} /> 
                <label for="remember_checkbox">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <div class="login-buttons">
                <button type="submit" class="btn btn-success btn-block btn-lg">{{ __('Login') }}</button>
            </div>
            <div class="m-t-20">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
    <!-- end login-content -->
</div>
<!-- end login -->

<ul class="login-bg-list clearfix">
    <li class="active"><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-17.jpg" style="background-image: url(../assets/img/login-bg/login-bg-17.jpg)"></a></li>
    <li><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-16.jpg" style="background-image: url(../assets/img/login-bg/login-bg-16.jpg)"></a></li>
    <li><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-15.jpg" style="background-image: url(../assets/img/login-bg/login-bg-15.jpg)"></a></li>
    <li><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-14.jpg" style="background-image: url(../assets/img/login-bg/login-bg-14.jpg)"></a></li>
    <li><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-13.jpg" style="background-image: url(../assets/img/login-bg/login-bg-13.jpg)"></a></li>
    <li><a href="javascript:;" data-click="change-bg" data-img="../assets/img/login-bg/login-bg-12.jpg" style="background-image: url(../assets/img/login-bg/login-bg-12.jpg)"></a></li>
</ul>
@endsection
@push('scripts')
	<script src="{{asset('/assets/login-v2.demo.js')}}"></script>
	<script>
		$(document).ready(function() {
			LoginV2.init();
		});
	</script>
@endpush