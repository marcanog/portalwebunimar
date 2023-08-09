@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/our-history/ourhistory.jpg')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ourinstitute/Inst-02.png')}}">
                <h4>{{trans('history.our-history-title')}}</h4>
            </div>
        </div>
        <div class="d-flex m-4 flex-column">
            <div class="text-justify m-4 sectionbody">
                <p>{{trans('history.our-history-1')}}</p>
                <p>{{trans('history.our-history-2')}}</p>
                <p>{{trans('history.our-history-3')}}</p>
            </div>
        </div>
        <div class="content">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/our-history/20years.jpg')}}" width="100%">
        </div>
        <div class="d-flex m-4 flex-column">
            <div class="text-justify m-4 sectionbody">
                <p>{{trans('history.our-history-4')}}</p>
                <p>{{trans('history.our-history-5')}}</p>
            </div>
        </div>
        <div class="content mb-4">
            <div id="carousel-home" class="carousel slide mb-4" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-home" data-slide-to="1"></li>
                    <li data-target="#carousel-home" data-slide-to="2"></li>
                    <li data-target="#carousel-home" data-slide-to="3"></li>
                    <li data-target="#carousel-home" data-slide-to="4"></li>
                    <li data-target="#carousel-home" data-slide-to="5"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="9000">
                        <img class="d-block w-100" src="{{URL::asset('image/banners/'.trans('commons.lang-banner').'/our-history/history-unimar/picture1.jpg')}}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{URL::asset('image/banners/'.trans('commons.lang-banner').'/our-history/history-unimar/picture2.jpg')}}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{URL::asset('image/banners/'.trans('commons.lang-banner').'/our-history/history-unimar/picture3.jpg')}}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{URL::asset('image/banners/'.trans('commons.lang-banner').'/our-history/history-unimar/picture4.jpg')}}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{URL::asset('image/banners/'.trans('commons.lang-banner').'/our-history/history-unimar/picture5.jpg')}}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{URL::asset('image/banners/'.trans('commons.lang-banner').'/our-history/history-unimar/picture6.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection
