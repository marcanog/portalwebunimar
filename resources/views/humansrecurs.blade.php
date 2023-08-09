@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/'.trans('commons.lang-banner').'/rrhh/humanstalent.jpg')}}">
        </div>
        {{--Section info--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/logo-unimar.png')}}">
                <h4>{{trans('rrhh.title')}}</h4>
            </div>
        </div>
        {{--  content information--}}
        {{--presentations cards --}}
        <div class="d-flex justify-content-around flex-column mx-4">
            <div class="card-deck">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/RRHH/sujey-avane.png')}}" alt="{{trans('rrhh.chief')}}" style="max-width: 8em; height: 10.25em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('rrhh.chief')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('rrhh.chief_charge')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/RRHH/zulangel-marin.png')}}" alt="{{trans('rrhh.asist_rrhh')}}" style="max-width: 8em; height: 10.25em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('rrhh.asist_rrhh')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('rrhh.asist_charge')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/RRHH/hylaris-rojas.png')}}" alt="{{trans('rrhh.asist_law')}}" style="max-width: 8em; height: 10.75em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('rrhh.asist_law')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('rrhh.law_charge')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/RRHH/cecilia-diaz.png')}}" alt="{{trans('rrhh.analista_2')}}" style="max-width: 8em; height: 10.75em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('rrhh.analista_2')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('rrhh.analista_2_charge')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/RRHH/florianys-villarroel.png')}}" alt="{{trans('rrhh.secretary')}}" style="max-width: 8em; height: 10.75em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('rrhh.secretary')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('rrhh.secretary_charge')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- content information --}}
        <div class="content justify-content-around content-vext mx-4">
            <div class="row justify-content-center mx-4">
                {{-- our subsystem --}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                     aria-controls="collapse3">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/rrhh/rrhh-03.png')}}" width="80%">
                    </a>
                </div>
                {{-- objetives --}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse4" role="button"
                     aria-expanded="false"
                     aria-controls="collapse4">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/rrhh/rrhh-02.png')}}" width="80%">
                    </a>
                </div>
                {{-- mission --}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse5" role="button"
                     aria-expanded="false"
                     aria-controls="collapse5">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/rrhh/rrhh-04.png')}}" width="80%">
                    </a>
                </div>
                {{-- vission --}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse6" role="button"
                     aria-expanded="false"
                     aria-controls="collapse5">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/rrhh/rrhh-05.png')}}" width="80%">
                    </a>
                </div>
                {{--fin struct--}}
            </div>
            {{-- card-bodies --}}
            {{-- our subsystem --}}
            <div class="collapse m-4" id="collapse3">
                <div class="card border-0 card-body">
                    <p class="card-text text-left font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('rrhh.our-system')}}
                    </p>
                    <ul class="text-justify">
                        <li><p> {{trans('rrhh.our_1')}}</p></li>
                        <li><p> {{trans('rrhh.our_2')}}</p></li>
                    </ul>
                </div>
            </div>
            {{-- objetives --}}
            <div class="collapse mx-4" id="collapse4">
                <div class="card border-0 card-body">
                    <p class="card-text text-left font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('rrhh.objetives')}}
                    </p>
                    <div class="card-body text-justify border-0 m-4">
                        <ul>
                            <li><p>{{trans('rrhh.obj_1')}}</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- mission --}}
            <div class="collapse m-4" id="collapse5">
                <p class="card-text text-left font-weight-bold mx-4" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('rrhh.mission')}}
                </p>
                <div class="card-body text-justify border-0 m-4">
                    <ul>
                        <li><p>{{trans('rrhh.mission_1')}}</p></li>
                    </ul>
                </div>
            </div>
            {{-- vission --}}
            <div class="collapse m-4" id="collapse6">
                <p class="card-text text-left font-weight-bold mx-4" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('rrhh.vission')}}
                </p>
                <div class="card-body text-justify border-0 m-4">
                    <ul>
                        <li><p>{{trans('rrhh.vission_1')}}</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Contacts information-->
        <div class="d-flex border-0 justify-content-around mx-4 text-left card card-body">
            <h5 class="font-weight-bold">{{trans('rrhh.info_title')}}</h5>
            <div class="flex-row">
                <p><b>{{trans('rrhh.email-title')}}</b></p><p id="name-funders">&nbsp {{trans('rrhh.email')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('rrhh.phone_title')}}</b></p><p id="name-funders">&nbsp</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('rrhh.schecdule')}}</b></p><p id="name-funders">&nbsp{{trans('rrhh.schecdule_1')}}</p>
            </div>
        </div>
    </div>
@endsection
