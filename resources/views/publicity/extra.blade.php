@extends('layouts.layout')

@section('content')
<div class="content my-4 pb-4">
    <div class="banner-main">
        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceremonies/ceremonies.jpg')}}" width="100%">
    </div>
    {{--Section info--}}
    <div class="section-content">
        <div class="d-flex justify-content-start">
            <img id="img-section"
                 src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceremonies/ceremonies-01.png')}}">
            <h4>{{trans('extras/extra.title')}}</h4>
        </div>
    </div>
    <div class="content text-justify text-black sectionbody m-4">
        <p>{{trans('extras/extra.extra-1')}}</p>
        <p>{{trans('extras/extra.extra-2')}}</p>
        <p>{{trans('extras/extra.extra-3')}}</p>
        <p>{{trans('extras/extra.extra-4')}}</p>
        <p>{{trans('extras/extra.extra-5')}}</p>
        <p>{{trans('extras/extra.extra-6')}}</p>
        <p>{{trans('extras/extra.extra-7')}}</p>
        <p class="font-weight-bold">{{trans('extras/extra.extra-8')}}</p>
    </div>
    <div class="content my-4">
        <div id="carousel-home" class="carousel slide mb-4" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators mb-4 invisible">
                <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-home" data-slide-to="1"></li>
                <li data-target="#carousel-home" data-slide-to="2"></li>
                <li data-target="#carousel-home" data-slide-to="3"></li>
                <li data-target="#carousel-home" data-slide-to="4"></li>
                <li data-target="#carousel-home" data-slide-to="5"></li>
                <li data-target="#carousel-home" data-slide-to="6"></li>
                <li data-target="#carousel-home" data-slide-to="7"></li>
                <li data-target="#carousel-home" data-slide-to="8"></li>
                <li data-target="#carousel-home" data-slide-to="9"></li>
                <li data-target="#carousel-home" data-slide-to="10"></li>
                <li data-target="#carousel-home" data-slide-to="11"></li>
                <li data-target="#carousel-home" data-slide-to="12"></li>
                <li data-target="#carousel-home" data-slide-to="13"></li>
                <li data-target="#carousel-home" data-slide-to="14"></li>
                <li data-target="#carousel-home" data-slide-to="15"></li>
                <li data-target="#carousel-home" data-slide-to="16"></li>
                <li data-target="#carousel-home" data-slide-to="17"></li>
                <li data-target="#carousel-home" data-slide-to="18"></li>
                <li data-target="#carousel-home" data-slide-to="19"></li>
            </ol>
            <a class="carousel-control-prev" href="#carousel-home" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-home" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!-- Wrapper for slides -->
            <div class="carousel-inner mb-4">
                <div class="carousel-item active" data-interval="12000">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_1.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_2.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_3.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_4.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_5.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_6.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_7.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_8.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_9.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_10.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_11.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_12.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_13.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_14.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_15.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_16.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_17.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_18.jpg')}}" width="100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{URL::asset('image/promo/foto_19.jpg')}}" width="100%">
                </div>

            </div>
        </div>
    </div>

</div>
@endsection
