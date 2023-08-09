@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/es/alumni.jpg')}}">
        </div>
        {{--Section info--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/logo-unimar.png')}}"><h4>{{trans('home.acadconvens')}}</h4>
            </div>
        </div>
        {{--contents--}}
        <div class="banner-main mb-4">
            <img src="{{URL::asset('/image/banners/es/construction.jpg')}}">
        </div>
    </div>
@endsection
