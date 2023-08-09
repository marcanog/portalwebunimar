@extends('layouts.layout')

@section ('content')
    <div class="content">
        {{-- main banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/deansoffice/ing/engdean.jpg')}}" width="100%">
        </div>
        {{-- section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/engineering/Ing-07.png')}}"><h4>{{trans('engineering.deaneng-section')}}</h4>
            </div>
        </div>
        {{--cards presentations --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Engine/dean.jpg')}}" alt="{{trans('engineering.deaneng-author-title')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('engineering.deaneng-author')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('engineering.deaneng-author-title')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('engineering.deaneng-author-mail')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Engine/asistent.jpg')}}" alt="{{trans('engineering.deaneng-asist-title')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('engineering.deaneng-asist')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('engineering.deaneng-asist-title')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('engineering.deaneng-asist-mail')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--content information --}}
        <div class="d-flex justify-content-around m-4">
            <div class="row justify-content-around">
                <div class="col-sm-3 col-md-3 my-2" data-toggle="collapse" href="#collapse"
                     role="button" aria-expanded="false" aria-controls="collapse">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/cjyp/CJyP-02.png')}}" width="75%">
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2" data-toggle="collapse" href="#collapse2"
                     role="button" aria-expanded="false" aria-controls="collapse2">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/engineering/Ing-03.png')}}" width="75%">
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2" data-toggle="collapse" href="#collapse3"
                           role="button" aria-expanded="false" aria-controls="collapse3">
                    <a id="campusbtn" href="{{URL('/career/engine/systemengineering')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/engineering/Ing-08.png')}}" width="75%">
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2" role="button">
                    <a id="campusbtn" href="{{URL('/degreemodality')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/engineering/Ing-04.png')}}" width="75%">
                    </a>
                </div>
            </div>
        </div>
        {{--contents informations --}}
        <div class="d-flex justify-content-around flex-column mx-4">
            <div class="collapse m-4" id="collapse">
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">{{trans('engineering.deaneng-functions')}}</p>
                    <ul>
                        <li><p> {{trans('engineering.deaneng-functions-1')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-3')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-4')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-2')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-5')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-6')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-7')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-8')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-9')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-10')}}</p></li>
                        <li><p> {{trans('engineering.deaneng-functions-11')}}</p></li>
                    </ul>
                </div>
            </div>
            <div class="collapse m-4" id="collapse2">
                <div class="card border-0 card-body">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('engineering.deaneng-subsystems')}}</p>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-3 my-2 border-0">
                            <a id="link-subsystem" href="#">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/engineering/Ing-05.png')}}" width="75%">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 my-2 border-0">
                            <a id="link-subsystem" href="#">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/engineering/Ing-06.png')}}" width="75%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- card engineering --}}
{{--            <div class="collapse m-4" id="collapse3">--}}
{{--                <div class="d-flex justify-content-around">--}}
{{--                    <div class="card-group">--}}
{{--                        <div class="card border-0 m-4">--}}
{{--                            <div class="row no-gutters">--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <img class="rounded" src="{{URL::asset('/image/personal/Engine/coord.jpg')}}" alt="{{trans('engineering.deaneng-coord-title')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <div class="card-body text-left">--}}
{{--                                        <h3 class="card-title fs-6">{{trans('engineering.deaneng-coord')}}</h3>--}}
{{--                                        <p class="card-text fs-6 font-weight-bold">{{trans('engineering.deaneng-coord-title')}}</p>--}}
{{--                                        <p class="card-text font-weight-bold" id="name-funders">{{trans('engineering.deaneng-coord-mail')}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="card m-4 invisible">--}}
{{--                            <div class="row no-gutters">--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Coord Psantías e Investigación Ingeniería y Afines" style="max-width: 8em; height: 12.25em; background-color: #336699;">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <h3 class="card-title">{{trans('engineering.deaneng-coord')}}</h3>--}}
{{--                                        <p class="card-text font-weight-bold">{{trans('engineering.deaneng-coord-title')}}</p>--}}
{{--                                        <p class="card-text"><small class="text-muted">{{trans('engineering.deaneng-coord-mail')}}</small></p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        {{-- content info contact--}}
        <div class="d-flex justify-content-around m-4 border-0 text-left card card-body">
            <h5 class="font-weight-bold">{{trans('engineering.deaneng-info-title')}}</h5>
            <div class="flex-row">
                <p><b>{{trans('engineering.deaneng-info-etitle')}}</b></p>
                <p id="name-funders">&nbsp{{trans('engineering.deaneng-info-email')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('engineering.deaneng-info-teltit')}}</b></p>
                <p id="name-funders">&nbsp{{trans('engineering.deaneng-info-telf')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('engineering.deaneng-info-schedtit')}}</b></p>
                <p id="name-funders">&nbsp{{trans('engineering.deaneng-info-sched')}}</p>
            </div>
        </div>
    </div>
@endsection
