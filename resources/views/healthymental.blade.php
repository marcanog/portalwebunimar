@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/psicology-help/psicohelp.jpg')}}" width="100%">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/logo-unimar.png')}}">
                <h4>{{trans('commons.healthymental')}}</h4>
            </div>
        </div>
        {{--        content information --}}
        <div class="content justify-content-around m-4 content-vext">
            <div class="row justify-content-around mb-4">
                {{--Premisa--}}
                <div class="col-sm-4 col-md-4 my-4"
                     data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false"
                     aria-controls="collapse1">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/curricula/Curricula-02.png')}}" width="75%">
                    </a>
                </div>
                {{--Objetivo--}}
                <div class="col-sm-4 col-md-4 my-4"
                     data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('/image/views/'.trans('commons.lang-banner').'/curricula/Curricula-03.png')}}" width="75%">
                    </a>
                </div>
                {{--Funciones--}}
                <div class="col-sm-4 col-md-4 my-4"
                     data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                     aria-controls="collapse3">
                    <a id="campusbtn">
                        <img src="{{URL::asset('/image/views/'.trans('commons.lang-banner').'/curricula/Curricula-04.png')}}" width="75%">
                    </a>
                </div>
            </div>
            <div class="row justify-content-around">
                {{--Premisa--}}
                <div class="collapse mx-4" id="collapse1">
                    <div class="card border-0 card-body">
                        <p class="card-text text-left font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('psico.our-subsystem')}}
                        </p>
                        <p class="text-justify sectionbody"> {{trans('psico.our_1')}}</p>
                    </div>
                </div>
                {{--Objetivo--}}
                <div class="collapse mx-4" id="collapse2">
                    <div class="card border-0 card-body">
                        <p class="card-text text-left font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('psico.objetives')}}
                        </p>
                        <ul>
                            <li><p class="text-justify sectionbody"> {{trans('psico.obj_1')}}</p></li>
                        </ul>
                    </div>
                </div>
                {{--Funciones--}}
                <div class="collapse mx-4" id="collapse3">
                    <div class="card border-0 card-body text-justify">
                        <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('psico.functions')}}
                        </p>
                        <ul>
                            <li><p> {{trans('psico.functions_1')}}</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex m-4 card border-0 card-body text-left">
            <h5 class="font-weight-bold">{{trans('psico.info_title')}}</h5>
            <div class="flex-row">
                <p><b>{{trans('psico.email-title')}}</b></p><p id="name-funders">&nbsp{{trans('psico.email')}}</p>
            </div>
            <div class="flex-row">
                <p> <b>{{trans('psico.phone_title')}}</b></p><p id="name-funders">&nbsp</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('psico.schecdule')}}</b></p><p id="name-funders">&nbsp{{trans('psico.schecdule_1')}}</p>
            </div>
        </div>
    </div>
@endsection
