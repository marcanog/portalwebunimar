@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" id="login-card">
                        <div><img class="img-login" src="{{ asset('./image/user.png') }}"></div>
                        <span class="title-login">{{trans('llogin.l-login')}}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            @if($errors->get('done'))
                                <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                                    <span>{{ $errors->first() }}</span>
                                </div>
                            @endif
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">
                                    {{ trans('llogin.l-mail')}}
                                </label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @if($errors->get('email_error')) is-invalid @endif" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @if($errors->get('email_error'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first() }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right"> {{ trans('llogin.l-password')}}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" minlength="5" class="form-control @if($errors->get('password_error')) is-invalid @endif" name="password" required autocomplete="current-password">
                                    @if($errors->get('password_error'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first() }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ trans('llogin.l-rememberpsd')}}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row flex-center">
                                <div class="col-sm-6 offset-sm-2">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ trans('llogin.l-forgotpsd')}}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row flex-center">
                                <div class="col-sm-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" id="btn-login">
                                        {{ trans('llogin.l-signup')}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
    </script>
{{--    <button class="g-recaptcha"--}}
{{--            data-sitekey="6LcKiSIfAAAAAKoBw59kLj05qUtBn7QmmZcFrgPW"--}}
{{--            data-callback='onSubmit'--}}
{{--            data-action='submit'>Submit</button>--}}
@endsection
