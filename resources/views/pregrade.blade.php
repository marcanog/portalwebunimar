@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/pregrade/pregrade.jpg')}}" width="100%">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/pregrade/Pre-02.png')}}">
                <h4>{{trans('commons.est-pregrade')}}</h4>
            </div>
        </div>
        {{--pregrade--}}

        <div class="d-flex justify-content-around flex-column m-4">
            <p class="text-justify fw-bold fs-4" id="name-funders">
                {{trans('commons.preg-title')}}</p>
            <div class="row justify-content-around">
                <div class="col-sm-3 col-md-3 my-2">
                    <a id="link-subsystem" href="{{url('/career/engine/systemengineering')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/pregrade/Pre-03.png')}}" width="100%">
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2">
                    <a id="link-subsystem" href="{{url('/career/humarte/graphicdesing')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/pregrade/Pre-04.png')}}" width="100%">
{{--                        <span>{{trans('offers.o-arte')}}</span>--}}
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2">
                    <a id="link-subsystem" href="{{url('/career/humarte/modernlangs')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/pregrade/Pre-05.png')}}" width="100%">
{{--                        <span>{{trans('offers.o-langs')}}</span>--}}
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2">
                    <a id="link-subsystem" href="{{url('/career/humarte/integraleducation')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/pregrade/Pre-10.png')}}" width="100%">
                        {{--                        <span>{{trans('offers.o-langs')}}</span>--}}
                    </a>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-sm-3 col-md-3 my-2">
                    <a id="link-subsystem" href="{{url('/career/socialcomunication/soccomunication')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/pregrade/Pre-09.png')}}" width="100%">
                        {{--                        <span>{{trans('offers.o-langs')}}</span>--}}
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2">
                    <a id="link-subsystem" href="{{url('/career/ceys/administration')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/pregrade/Pre-07.png')}}" width="100%">
{{--                        <span>{{trans('offers.o-admins')}}</span>--}}
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2">
                    <a id="link-subsystem" href="{{url('/career/ceys/publicaccounting')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/pregrade/Pre-08.png')}}" width="100%">
{{--                        <span>{{trans('offers.o-contpub')}}</span>--}}
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2">
                    <a id="link-subsystem" href="{{url('/career/cjyp/law')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/pregrade/Pre-06.png')}}" width="100%">
{{--                        <span>{{trans('offers.o-law')}}</span>--}}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
