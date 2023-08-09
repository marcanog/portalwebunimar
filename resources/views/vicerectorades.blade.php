@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/vicerrectors/vicerrectors.jpg')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/vicerrectors/Vices-02.png')}}">
                <h4>{{trans('commons.vicerectorades-title')}}</h4>
            </div>
        </div>
        <div class="d-flex justify-content-around m-4 content-vext">
            <div class="row justify-content-around">
                <div class="col-sm-3 col-md-3 my-2">
                    <a href="{{URL('/vice-rectorate/academic')}}" id="foundbtn">
                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/vicerrectors/Vices-03.png')}}" width="80%">
{{--                    <span>{{trans('commons.vice-acad-title')}}</span>--}}
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2">
                    <a href="{{URL('/vextension')}}" id="campusbtn">
                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/vicerrectors/Vices-04.png')}}" width="80%">
{{--                    <span>{{trans('commons.vice-ext-title')}}</span>--}}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
