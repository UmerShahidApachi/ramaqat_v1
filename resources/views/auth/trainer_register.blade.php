@extends('layouts.main2')
@section('headerbody')
    Registration
@stop
@section('register')
    <div class="img-bg">
        <div class="flex-center flex-column col-11 col-sm-4 mx-auto">
            <img class="mb-1 img-fluid SiteLogo" src="{{asset('assets/frontend/img/logo.png')}}" alt="Logo">
            <h1 class="text-hide animated fadeIn mb-1 font45 plum-text mb-2">أهلا وسهلا بك إلى رمقات</h1>
            <div class="inputform plum-bg text-center white-text">
                <h2>Sign Up</h2>
                <!-- Default form row -->
                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <input type="hidden" name="trainer" value="1" >
                <!-- Grd row -->
                    <div class="form-row">
                        <!-- Grid column -->
                        <div class="col-12 mx-auto mb-3">
                            <!-- Default input -->
                            <input id="name" type="text" placeholder="Name" class="custom-height form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-12 mx-auto mb-3">
                            <!-- Default input -->
                            <input id="email" type="email" placeholder="Email" class="custom-height form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!-- Grid column -->
                        <div class="col-12 mx-auto mb-3">
                            <!-- Default input -->
                            <input id="experience" type="text" placeholder="Experience" class="custom-height form-control @error('name') is-invalid @enderror" name="experience" value="{{ old('experience') }}" required autocomplete="experience" autofocus>
                            @error('experience')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12 mx-auto mb-3">
                            <!-- Default input -->
                            <input id="fb_link" type="url" placeholder="Facebook Link" class="custom-height form-control @error('fb_link') is-invalid @enderror" name="fb_link" value="{{ old('fb_link') }}" required autocomplete="fb_link" autofocus>
                            @error('fb_link')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12 mx-auto mb-3">
                            <!-- Default input -->
                            <input id="in_link" type="url" placeholder="Linkedin Link" class="custom-height form-control @error('in_link') is-invalid @enderror" name="in_link" value="{{ old('in_link') }}" required autocomplete="in_link" autofocus>
                            @error('in_link')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12 mx-auto mb-3">
                            <!-- Default input -->
                            <input id="insta_link" type="url" placeholder="Instagram Link" class="custom-height form-control @error('insta_link') is-invalid @enderror" name="insta_link" value="{{ old('insta_link') }}" required autocomplete="fb_link" autofocus>
                            @error('insta_link')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12 mx-auto mb-3">
                            <!-- Default input -->
                            <input id="twitter_link" type="url" placeholder="Twitter Link" class="custom-height form-control @error('twitter_link') is-invalid @enderror" name="twitter_link" value="{{ old('twitter_link') }}" required autocomplete="fb_link" autofocus>
                            @error('twitter_link')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!-- Grid column -->
                        <div class="col-12 mx-auto mb-3">
                            <!-- Default input -->
                            <input id="password" type="password" placeholder="Password" class="custom-height form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                        <div class="col-12 mx-auto mb-3">
                            <!-- Default input -->
                            <input id="password-confirm" placeholder="Re-Type Password" type="password" class="custom-height form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        {{--                        <div class="col-12 mx-auto mb-3">--}}
                        {{--                            <input type="checkbox" name="trainer" value="1" > As Trainer--}}
                        {{--                        </div>--}}

                    </div>
                    <!-- Grd row -->
                    <button type="submit" class="login-btn mb-3">Sign Up</button>

                </form>
                <!-- Default form row -->

                <div>Aleady Register?&nbsp;<span><a href="{{route("login")}}">Login</a></span></div>
                <hr style="background-color:#fff;">
                <a href="{{route("register")}}">
                    <div class="col-12">
                        <button style="border-radius:5px;"  class="btn white-btn waves-effect waves-light w-100">User</buton>
                    </div>
                </a>
            </div>
            <div class="font36 plum-text mt-3 mb-3">تخطى</div>
        </div>
    </div>


    <div id="to-top" title="back to top">↑</div>
@endsection
