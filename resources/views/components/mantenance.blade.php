@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/'.trans('commons.lang-banner').'/mantenance.jpg')}}">
        </div>
    </div>
@endsection
