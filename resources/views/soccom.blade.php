@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/deansoffice/deans.jpg')}}" width="100%">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/engineering/Ing-07.png')}}">
                <h4>{{trans('degrees/soccomunication/soccom.title')}}</h4>
            </div>
        </div>
        <div class="banner-main my-4">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/construction.jpg')}}" width="100%">
        </div>
    </div>
@endsection
