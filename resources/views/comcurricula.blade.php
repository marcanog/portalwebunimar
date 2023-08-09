@extends('layouts.layout')

@section ('content')
    <div class="content">
{{--        banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/curricula/planification.jpg')}}">
        </div>
{{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/curricula/Curricula-05.png')}}"><h4>{{trans('commons.curriculum')}}</h4>
            </div>
        </div>
{{--        presentations cards --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Curricula/marcano.jpg')}}" alt="{{trans('vacademy.vacad-atitle')}}" width="100%" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('comcurricula.director-author')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('comcurricula.director-author-title')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('comcurricula.director-author-email')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Curricula/carmen-rivas.png')}}" alt="{{trans('vacademy.vacad-atitle')}}" width="100%" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('comcurricula.asist-author')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('comcurricula.asist-author-title')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('comcurricula.asist-author-email')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        content information --}}
        <div class="content justify-content-around m-4 content-vext">
            <div class="row justify-content-around">
                {{--Premisa--}}
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false"
                     aria-controls="collapse1">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/curricula/Curricula-02.png')}}" width="75%">
                    </a>
                </div>
                {{--Objetivo--}}
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('/image/views/'.trans('commons.lang-banner').'/curricula/Curricula-03.png')}}" width="75%">
                    </a>
                </div>
                {{--Funciones--}}
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                     aria-controls="collapse3">
                    <a id="campusbtn">
                        <img src="{{URL::asset('/image/views/'.trans('commons.lang-banner').'/curricula/Curricula-04.png')}}" width="75%">
                    </a>
                </div>
                {{--Premisa--}}
                <div class="collapse my-4" id="collapse1">
                    <div class="card border-0 card-body">
                        <p class="card-text text-left font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('comcurricula.department-description-title')}}
                        </p>
                        <p class="text-justify sectionbody"> {{trans('comcurricula.department-description-p1')}}</p>
                    </div>
                </div>
                {{--Objetivo--}}
                <div class="collapse" id="collapse2">
                    <div class="card border-0 card-body">
                        <p class="card-text text-left font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('comcurricula.department-objective-title')}}
                        </p>
                        <p class="text-justify sectionbody"> {{trans('comcurricula.department-objective-description-p1')}}</p>
                    </div>
                </div>
                {{--Funciones--}}
                <div class="collapse" id="collapse3">
                    <div class="card border-0 card-body text-justify">
                        <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('comcurricula.department-function-title')}}
                        </p>
                        <ul>
                            <li><p> {{trans('comcurricula.department-functions-1')}}</p></li>
                            <li><p> {{trans('comcurricula.department-functions-2')}}</p></li>
                            <li><p> {{trans('comcurricula.department-functions-3')}}</p></li>
                            <li><p> {{trans('comcurricula.department-functions-4')}}</p></li>
                            <li><p> {{trans('comcurricula.department-functions-5')}}</p></li>
                            <li><p> {{trans('comcurricula.department-functions-6')}}</p></li>
                            <li><p> {{trans('comcurricula.department-functions-7')}}</p></li>
                            <li><p> {{trans('comcurricula.department-functions-8')}}</p></li>
                            <li><p> {{trans('comcurricula.department-functions-9')}}</p></li>
                            <li><p> {{trans('comcurricula.department-functions-10')}}</p></li>
                            <li><p> {{trans('comcurricula.department-functions-11')}}</p></li>
                            <li><p> {{trans('comcurricula.department-functions-12')}}</p></li>
                        </ul>
                            <p class="card-text font-weight-bold" id="name-funders"
                               style="font-size: 1.25rem; font-weight: 600;">
                                {{trans('comcurricula.department-super')}}</p>
                           <ul>
                               <li><p> {{trans('comcurricula.department-functions-13')}}</p></li>
                                <li><p> {{trans('comcurricula.department-functions-14')}}</p></li>
                                <li><p> {{trans('comcurricula.department-functions-15')}}</p></li>
                                <li><p> {{trans('comcurricula.department-functions-16')}}</p></li>
                                <li><p> {{trans('comcurricula.department-functions-17')}}</p></li>
                                <li><p> {{trans('comcurricula.department-functions-18')}}</p></li>
                                <li><p> {{trans('comcurricula.department-functions-19')}}</p></li>
                                <li><p> {{trans('comcurricula.department-functions-20')}}</p></li>
                                <li><p> {{trans('comcurricula.department-functions-21')}}</p></li>
                                <li><p> {{trans('comcurricula.department-functions-22')}}</p></li>
                                <li><p> {{trans('comcurricula.department-functions-23')}}</p></li>
                                <li><p> {{trans('comcurricula.department-functions-24')}}</p></li>
                                <li><p> {{trans('comcurricula.department-functions-25')}}</p></li>
                                <li><p> {{trans('comcurricula.department-functions-26')}}</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex m-4 card border-0 card-body text-left">
            <h5 class="font-weight-bold">{{trans('rectorade.rector-info')}}</h5>
            <div class="flex-row">
                <p><b>{{trans('comcurricula.department-info-email-title')}}</b></p><p id="name-funders">&nbsp{{trans('comcurricula.department-info-email')}}</p>
            </div>
            <div class="flex-row">
                <p> <b>{{trans('comcurricula.department-info-telf-title')}}</b></p><p id="name-funders">&nbsp{{trans('comcurricula.department-info-telf')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('comcurricula.department-info-sched-title')}}</b></p><p id="name-funders">&nbsp{{trans('comcurricula.department-info-sched')}}</p>
            </div>
        </div>
    </div>
@endsection
