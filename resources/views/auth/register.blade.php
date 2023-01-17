@extends('layouts.app')

@section('content')
<!-- <div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ __('Register') }}</div>

<div class="card-body">
<form method="POST" action="{{ route('register') }}">
@csrf

<div class="row mb-3">
<label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

<div class="col-md-6">
<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="row mb-3">
<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

<div class="col-md-6">
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="row mb-3">
<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

<div class="col-md-6">
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="row mb-3">
<label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

<div class="col-md-6">
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
</div>
</div>

<div class="row mb-0">
<div class="col-md-6 offset-md-4">
<button type="submit" class="btn btn-primary">
{{ __('Register') }}
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div> -->

<link rel="stylesheet" href="css/loginform.css">
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image-register"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">{{ __('Register') }}</h3>
                            <p class="text-muted mb-4">New to Essential Mart? Register Here.</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input id="name" type="text" placeholder="Your Name" autofocus=""
                                        class="p-2 form-control rounded-pill border-0 shadow-sm px-4 @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="ms-2 invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input id="email" type="email" placeholder="Your Email Address"
                                        class="p-2 form-control rounded-pill border-0 shadow-sm px-4 text-dark @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }} " autocomplete="email">
                                    @error('email')
                                    <span class="ms-2 invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input id="password" type="password" placeholder="Your Password"
                                        class="p-2 form-control rounded-pill border-0 shadow-sm px-4 text-dark @error('password') is-invalid @enderror"
                                        name="password" autocomplete="new-password">
                                    @error('password')
                                    <span class="ms-2 invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input id="password-confirm" type="password" placeholder="Confirm Password"
                                        class="p-2 form-control rounded-pill border-0 shadow-sm px-4 text-dark @error('password') is-invalid @enderror"
                                        name="password_confirmation" autocomplete="new-password">
                                </div>

                                <button type="submit"
                                    class="btn btn-primary btn-block text-uppercase mb-2 w-100 rounded-pill shadow-sm p-2">{{ __('Register') }}</button>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>
@endsection