@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/deansoffice/deans.jpg')}}" width="100%">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/home/home-04.png')}}">
                <h4>{{trans('home.academics_areas')}}</h4>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-3 col-md-3 my-2">
                <a href="{{url('/humarte')}}">
                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/home/home-15.png')}}" width="80%">
{{--                    <span>{{trans('home.humarte')}}</span><br>--}}
                </a>
            </div>
            <div class="col-sm-3 col-md-3 my-2">
                <a href="{{url('/cjyp')}}"><img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/home/home-16.png')}}" width="80%">
{{--                <span>{{trans('home.cjyp')}}</span><br>--}}
                </a>
            </div>
            <div class="col-sm-3 col-md-3 my-2">
                <a href="{{url('/ceys')}}"><img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/home/home-17.png')}}" width="80%">
{{--                <span>{{trans('home.ceys')}}</span><br>--}}
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-3 col-md-3 my-2">
                <a href="{{url('/genestud')}}"><img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/home/home-19.png')}}" width="80%">
{{--                <span>{{trans('home.estgen')}}</span>--}}
                </a>
            </div>
            <div class="col-sm-3 col-md-3 my-2">
                <a href="{{url('/engineerie')}}"><img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/home/home-18.png')}}" width="80%">
{{--                <span>{{trans('home.ingsyst')}}</span>--}}
                </a>
            </div>
{{--           <div class="content-deanship" style="background-color: #EC7700">--}}
{{--                <a href="/vextension"><img src="{{URL::asset('./image/deans/extension.png')}}">--}}
{{--                <span>{{trans('home.extent')}}</span></a>--}}
{{--            </div> --}}
{{--            <div class="content-deanship" style="background-color: #00953E">--}}
{{--                <a href="/postgrade"><img src="{{URL::asset('./image/deans/postgrade.png')}}">--}}
{{--                <span>{{trans('home.posteinvg')}}</span></a>--}}
{{--            </div>--}}
{{--            <div class="content-deanship" style="background-color: #f6A016">--}}
{{--                <a href="#"><img src="{{URL::asset('./image/deans/agreements.png')}}">--}}
{{--                <span>{{trans('home.acadconvens')}}</span></a>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
