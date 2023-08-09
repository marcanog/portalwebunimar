@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{asset('./image/banners/'.trans('commons.lang-banner').'/investigation/investigation.jpg')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/investigation/Inv-06.png')}}">
                <h4>{{trans('dptoinvestigation.dinvest-title')}}</h4>
            </div>
        </div>
        {{--        cards presentations --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
{{--                            <img class="rounded-left" src="{{URL::asset('/image/ingeeniering/decaingenieria.jpg')}}" alt="{{trans('dptoinvestigation.dinvest-author-title')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">--}}
                            <img class="rounded" src="{{URL::asset('/image/personal/Investigation/mariela.jpg')}}" alt="{{trans('dptoinvestigation.dinvest-author-title')}}" style="max-width: 8em; height: 10.25em;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('dptoinvestigation.dinvest-author')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('dptoinvestigation.dinvest-author-title')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('dptoinvestigation.dinvest-author-email')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-4 invisible">
                    <div class="row no-gutters">
                        <div class="col-md-4">
{{--                            <img class="rounded-left" src="{{URL::asset('/image/ingeeniering/asistingenieria.jpg')}}" alt="{{trans('engineering.deaneng-asist-title')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">--}}
                            <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('dptoinvestigation.dinvest-atitle')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{trans('dptoinvestigation.dinvest-asist')}}</h3>
                                <p class="card-text font-weight-bold">{{trans('dptoinvestigation.dinvest-atitle')}}</p>
                                <p class="card-text"><small class="text-muted">{{trans('dptoinvestigation.dinvest-asitmail')}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-around m-4 content-vext">
            <div class="row justify-content-around">
                {{--functions--}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                     aria-controls="collapse3">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/investigation/Inv-02.png')}}" width="80%">
                        {{--                    <span>{{trans('dptoinvestigation.dinvest-functions-title')}}</span>--}}
                    </a>
                </div>
                {{--Encuentro de Saberes--}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                     aria-controls="collapse4">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/investigation/Inv-03.png')}}" width="80%">
{{--                        <span>{{trans('dptoinvestigation.dinvest-know')}}</span>--}}
                    </a>
                </div>
                {{--Certificaciones--}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false"
                     aria-controls="collapse5">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/investigation/Inv-04.png')}}" width="80%">
{{--                        <span>{{trans('dptoinvestigation.dinvest-certf')}}</span>--}}
                    </a>
                </div>
                {{--Revista Cientifica--}}
                <div class="col-sm-3 col-md-3 my-2" role="button">
                    <a href="https://www.unimarcientifica.edu.ve/revista" id="foundbtn" style="margin: 0 auto">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/investigation/Inv-05.png')}}" width="80%">
{{--                        <span>{{trans('dptoinvestigation.dinvest-journal')}}</span>--}}
                    </a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around flex-column mx-4">
            <div class="collapse mb-4" id="collapse3">
                <div class="card border-0 card-body">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('dptoinvestigation.dinvest-functions-title')}}
                    </p>
                    <ul class="text-justify">
                        <li><p> {{trans('dptoinvestigation.dinvest-functions-1')}}</p></li>
                        <li><p> {{trans('dptoinvestigation.dinvest-functions-2')}}</p></li>
                        <li><p> {{trans('dptoinvestigation.dinvest-functions-3')}}</p></li>
                        <li><p> {{trans('dptoinvestigation.dinvest-functions-4')}}</p></li>
                        <li><p> {{trans('dptoinvestigation.dinvest-functions-5')}}</p></li>
                        <li><p> {{trans('dptoinvestigation.dinvest-functions-7')}}</p></li>
                        <li><p> {{trans('dptoinvestigation.dinvest-functions-8')}}</p></li>
                        <li><p> {{trans('dptoinvestigation.dinvest-functions-9')}}</p></li>
                        <li><p> {{trans('dptoinvestigation.dinvest-functions-10')}}</p></li>
                        <li><p> {{trans('dptoinvestigation.dinvest-functions-11')}}</p></li>
                        <li><p> {{trans('dptoinvestigation.dinvest-functions-12')}}</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around m-4 border-0 text-left card card-body">
            <h5 class="font-weight-bold">{{trans('dptoinvestigation.dinvest-info-title')}}</h5>
            <div class="flex-row">
                <p><b>{{trans('engineering.deaneng-info-etitle')}}</b></p>
                <p id="name-funders">&nbsp{{trans('dptoinvestigation.dinvest-info-email')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('dptoinvestigation.dinvest-info-teltit')}}</b></p>
                <p id="name-funders">&nbsp{{trans('dptoinvestigation.dinvest-info-telf')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('dptoinvestigation.dinvest-info-schedtit')}}</b></p>
                <p id="name-funders">&nbsp{{trans('dptoinvestigation.dinvest-info-sched')}}</p>
            </div>
        </div>
    </div>
@endsection
