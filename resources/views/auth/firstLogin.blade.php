@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" id="login-card">
                        <div><img class="img-login" src="{{ asset('./image/user.png') }}"></div>
                        <span class="title-login">{{trans('llogin.f-register')}}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            @if($errors->any())
                                <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                                    <span>{{trans('llogin.f-error-register')}}</span>
                                </div>
                            @else
                            <div class="col-12 alert alert-danger alert-dismissible fade show">
                                <span>{{trans('llogin.f-login')}}</span>
                            </div>
                            @endif
                            <div class="form-group row">
                                <label for="birth" class="col-md-4 col-form-label text-md-right">Fecha de
                                    nacimiento: </label>
                                <div class="col-md-6">
                                    <input id="birth" type="date" class="form-control" name="birth"
                                        value="{{ old('birth') }}" autocomplete="birth" autofocus required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Teléfono: </label>
                                <div class="col-md-6">
                                    <input id="phone" type="tel" class="form-control" name="phone"
                                        value="{{ old('phone') }}" minlength="11" maxlength="15" autocomplete="phone"
                                        autofocus required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña: </label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required
                                        minlength="8" autocomplete="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Confirmar
                                    Password: </label>
                                <div class="col-md-6">
                                    <input id="password_confirmation" type="password" class="form-control"
                                        name="password_confirmation" required minlength="8"
                                        autocomplete="password_confirmation">
                                </div>
                            </div>
                            <div class="form-group row flex-center">
                                <div class="col-sm-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" id="btn-login">
                                        {{ trans('llogin.f-accept')}}
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
@endsection