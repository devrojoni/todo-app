@extends('layouts.auth')
@section('content')
<section class="login-content">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-md-5 col-sm-12 col-12 align-self-center">
                <div class="sign-user_card">
                    <div class="logo-detail">
                        <div class="d-flex align-items-center"><img src="{{ asset('/assets/images/logo.png') }}"
                                class="img-fluid rounded-normal light-logo logo" alt="logo">
                            <h4 class="logo-title ml-3">{{ config('app.name') }}</h4>
                        </div>
                    </div>
                    <h3 class="mb-2">{{ __('Reset Password') }}</h3>
                    <p>{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>
                    <x-ui.alert :message="session('status')" type="success"/>
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <div class="row">
                        <x-ui.input
                                group="col-lg-12"
                                :label="__('Email')"
                                type="email"
                                name="email"
                                id="email"
                                value="{{old('email')}}"
                                
                        />
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Email Password Reset Link') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
