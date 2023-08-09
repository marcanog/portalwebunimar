@extends('layouts.layout')

@section ('content')
    <div class="content">
        {{-- main banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/degreemod/degreemod.jpg')}}" width="100%">
        </div>
        {{-- section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/degreemod/degreemod-05.png')}}" width="100%">
                <h4>{{trans('degreemod.title')}}</h4>
            </div>
        </div>
        {{-- content information --}}
        <div class="d-flex flex-column justify-content-around m-4 content-vext">
            <div class="row justify-content-around">
                <div class="col-lg-4 col-md-4 my-2" data-toggle="collapse"
                     href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/degreemod/degreemod-07.png')}}" width="75%">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 my-2" data-toggle="collapse"
                     href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse4">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/degreemod/degreemod-01.png')}}" width="75%">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 my-2" data-toggle="collapse"
                     href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse5">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/degreemod/degreemod-08.png')}}" width="75%">
                    </a>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-around m-4" id="contevext">
            <div class="collapse mx-4" id="collapse3">
                <div class="card border-0 card-body text-justify">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('degreemod.title_invest')}}
                    </p>
                    <ul>
                        <li><p> {{trans('degreemod.invest-1')}}</p></li>
                        <li><p> {{trans('degreemod.invest-2')}}</p></li>
                        <li><p> {{trans('degreemod.invest-3')}}</p></li>
                        <li><p> {{trans('degreemod.invest-4')}}</p></li>
                        <li><p> {{trans('degreemod.invest-5')}}</p></li>
                        <li><p> {{trans('degreemod.invest-6')}}</p></li>
                        <li><p> {{trans('degreemod.invest-7')}}</p></li>
                    </ul>
                </div>
            </div>
            <div class="collapse mx-4" id="collapse4">
                <div class="card border-0 card-body text-justify">
                    <p style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('degreemod.title_inter')}}
                    </p>
                    <ul>
                        <li><p> {{trans('degreemod.inter-1')}}</p></li>
                        <li><p> {{trans('degreemod.inter-2')}}</p></li>
                        <li><p> {{trans('degreemod.inter-3')}}</p></li>
                        <li><p> {{trans('degreemod.inter-4')}}</p></li>
                        <li><p> {{trans('degreemod.inter-5')}}</p></li>
                        <li><p> {{trans('degreemod.inter-6')}}</p></li>
                        <li><p> {{trans('degreemod.inter-7')}}</p></li>
                        <li><p> {{trans('degreemod.inter-8')}}</p></li>
                        <li><p> {{trans('degreemod.inter-9')}}</p></li>
                        <li><p> {{trans('degreemod.inter-10')}}</p></li>
                        <li><p> {{trans('degreemod.inter-11')}}</p></li>
                        <li><p> {{trans('degreemod.inter-12')}}</p></li>
                        <li><p> {{trans('degreemod.inter-13')}}</p></li>
                        <li><p> {{trans('degreemod.inter-14')}}</p></li>
                        <li><p> {{trans('degreemod.inter-15')}}</p></li>
                    </ul>
                </div>
            </div>
            <div class="collapse m-4" id="collapse5">
                <div class="card border-0 card-body">
                    <p class="text-justify" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('engineering.deaneng-subsystems')}}</p>
                    <div class="row justify-content-around">
                        <div class="col-lg-3 col-md-3 my-2 border-0" data-toggle="collapse"
                             href="#collapse6" role="button" aria-expanded="false" aria-controls="collapse6">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/degreemod/degreemod-02.png')}}" width="75%">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 my-2 border-0" data-toggle="collapse"
                             href="#collapse7" role="button" aria-expanded="false" aria-controls="collapse7">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/degreemod/degreemod-03.png')}}" width="75%">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 my-2 border-0" data-toggle="collapse"
                             href="#collapse8" role="button" aria-expanded="false" aria-controls="collapse8">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/degreemod/degreemod-04.png')}}" width="75%">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 my-2 border-0" data-toggle="collapse"
                             href="#collapse9" role="button" aria-expanded="false" aria-controls="collapse9">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/degreemod/degreemod-06.png')}}" width="75%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse mx-4" id="collapse6"> {{--<--CEYS-->--}}
                <div class="content justify-content-around flex-column">
                    <div class="card-group">
                        <div class="card border-0 m-4">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <!-- <img class="rounded-left" src="{{URL::asset('/image/ingeeniering/decaingenieria.jpg')}}" alt="{{trans('ceys.chief-role')}}" style="max-width: 8em; height: 12.25em; background-color: #336699;"> -->
                                    <img class="rounded" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('ceys.coordpasinv-role')}}" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body text-left">
                                        <h3 class="card-title fs-6">{{trans('ceys.coordpasinv-name')}}</h3>
                                        <p class="card-text fs-6 font-weight-bold">{{trans('ceys.coordpasinv-role')}}</p>
                                        <p class="card-text font-weight-bold" id="name-funders">{{trans('ceys.coordpasinv-mail')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 m-4 invisible">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <!-- <img class="rounded-left" src="{{URL::asset('/image/ingeeniering/decaingenieria.jpg')}}" alt="{{trans('ceys.chief-role')}}" style="max-width: 8em; height: 12.25em; background-color: #336699;"> -->
                                    <img class="rounded" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('ceys.chief-role')}}" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body text-left">
                                        <h3 class="card-title fs-6">{{trans('ceys.coordpasinv-name')}}</h3>
                                        <p class="card-text fs-6 font-weight-bold">{{trans('ceys.coordpasinv-role')}}</p>
                                        <p class="card-text font-weight-bold" id="name-funders">{{trans('ceys.coordpasinv-mail')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse mx-4" id="collapse7">{{--<--CJYP-->--}}
                <div class="content justify-content-around flex-column">
                    <div class="card-group">
                        <div class="card border-0 m-4">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="rounded" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('cjyp.coordgrade')}}" style="max-width: 8em; height: 12.25em; background-color: #336699;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body text-left">
                                        <h3 class="card-title fs-6">{{trans('cjyp.coord-name')}}</h3>
                                        <p class="card-text fs-6 font-weight-bold">{{trans('cjyp.coordgrade')}}</p>
                                        <p class="card-text font-weight-bold" id="name-funders">{{trans('cjyp.coord-mail')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-4 invisible">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Coord Psantías e Investigación Ingeniería y Afines" style="max-width: 8em; height: 12.25em; background-color: #336699;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title">{{trans('engineering.deaneng-coord')}}</h3>
                                        <p class="card-text font-weight-bold">{{trans('engineering.deaneng-coord-title')}}</p>
                                        <p class="card-text"><small class="text-muted">{{trans('engineering.deaneng-coord-mail')}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse mx-4" id="collapse8">{{--<--HUMARTE-->--}}
                <div class="content justify-content-around flex-column">
                    <div class="card-group">
                        <div class="card border-0 m-4">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="rounded" src="{{URL::asset('/image/personal/Humarte/Bernardo.png')}}" alt="{{trans('humarte.coordgrade')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body text-left">
                                        <h3 class="card-title fs-6">{{trans('degreemod.humarte_coord_name')}}</h3>
                                        <p class="card-text fs-6 font-weight-bold">{{trans('humarte.coordgrade')}} &nbsp; {{trans('degreemod.humarte_career_dg')}}</p>
                                        <p class="card-text font-weight-bold" id="name-funders">{{trans('degreemod.humarte_coord_email')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-4 invisible">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('engineering.deaneng-coord-title')}}" style="max-width: 8em; height: 12.25em; background-color: #336699;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title">{{trans('engineering.deaneng-coord')}}</h3>
                                        <p class="card-text font-weight-bold">{{trans('engineering.deaneng-coord-title')}}</p>
                                        <p class="card-text"><small class="text-muted">{{trans('engineering.deaneng-coord-mail')}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse mx-4" id="collapse9">{{--<--ENGINE-->--}}
                <div class="content justify-content-around">
                    <div class="card-group">
                        <div class="card border-0 mx-4">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="rounded" src="{{URL::asset('/image/personal/Engine/coord.jpg')}}" alt="{{trans('engineering.deaneng-coord-title')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body text-left">
                                        <h3 class="card-title fs-6">{{trans('engineering.deaneng-coord')}}</h3>
                                        <p class="card-text fs-6 font-weight-bold">{{trans('engineering.deaneng-coord-title')}}</p>
                                        <p class="card-text font-weight-bold" id="name-funders">{{trans('engineering.deaneng-coord-mail')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-4 invisible">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="rounded-left" src="{{URL::asset('/image/avatar.svg')}}" alt="Coord Psantías e Investigación Ingeniería y Afines" style="max-width: 8em; height: 12.25em; background-color: #336699;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title">{{trans('engineering.deaneng-coord')}}</h3>
                                        <p class="card-text font-weight-bold">{{trans('engineering.deaneng-coord-title')}}</p>
                                        <p class="card-text"><small class="text-muted">{{trans('engineering.deaneng-coord-mail')}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="d-inline-flex flex-column justify-content-around m-4" id="contevext">--}}
{{--            <div class="collapse m-4" id="collapse6">--}}
{{--                <div class="card border-0 card-body">--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
