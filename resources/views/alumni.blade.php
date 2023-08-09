@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/'.trans('commons.lang-banner').'/alumnis/alumni.jpg')}}" width="100%">
        </div>
        {{--Section info--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/regstudents/EsRe-02.png')}}">
                <h4>{{trans('alumni.alumni-title')}}</h4>
            </div>
        </div>
        {{--contents--}}
    </div>
@endsection
