@extends('layouts.app')

<!-- Main Content -->
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" id="login-card">
                    <div><img class="img-login" src="{{ asset('./image/user.png') }}"></div>
                    <span class="title-login">{{trans('llogin.reset-title')}}</span>
                </div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}
                        @csrf
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if($errors->get('done'))
                            <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                                <span>{{ $errors->first() }}</span>
                            </div>
                        @endif

                        <div class="form-group row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                {{ trans('llogin.l-mail')}}
                            </label>
                            <div class="col-md-6">
                                <input type="email" class="form-control @if($errors->has('email')) is-invalid @endif" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="btn-login">
                                    {{ trans('llogin.reset-button')}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection