@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{asset('./image/banners/'.trans('commons.lang-banner').'/postgeinvest/postgeinvest.jpg')}}" width="100%">
        </div>
        {{--  section title --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/postgeinvest/PosteInv-02.png')}}">
                <h4>{{trans('postgeinv.title')}}</h4>
            </div>
        </div>

        <div class="d-flex justify-content-around m-4 content-vext">
            <div class="row justify-content-around">
                <div class="col-sm-3 col-md-3 my-2">
                    <a href="{{URL('/postgrade')}}" id="foundbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/postgeinvest/PosteInv-03.png')}}" width="80%">
                        {{--                    <span>{{trans('commons.vice-acad-title')}}</span>--}}
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2">
                    <a href="{{URL('/dptoinvest')}}" id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/postgeinvest/PosteInv-04.png')}}" width="80%">
                        {{--                    <span>{{trans('commons.vice-ext-title')}}</span>--}}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
