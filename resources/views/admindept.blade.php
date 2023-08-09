@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/'.trans('commons.lang-banner').'/ourinstitution.jpg')}}">
        </div>
        {{--Section info--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/views/'.trans('commons.lang-banner').'/admindept/Admin-02.png')}}">
                <h4>{{trans('admindept.title')}}</h4>
            </div>
        </div>
        {{--contents--}}
        <div class="d-flex justify-content-around flex-column mx-4">
            <div class="card-deck">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Administrationdept/beatriz-cabello.png')}}" alt="{{trans('admindept.admin-chief')}}" style="max-width: 8em; height: 10.25em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('admindept.admin-chief')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('admindept.admin-chief-title')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Administrationdept/andreina-marin.png')}}" alt="{{trans('admindept.admin-asist-title')}}" style="max-width: 8em; height: 10.25em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('admindept.admin-aist-grade')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('admindept.admin-asist-title')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Administrationdept/daniel-vizcaino.png')}}" alt="{{trans('admindept.admin-analist-title')}}" style="max-width: 8em; height: 10.75em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('admindept.admin-analist-grade')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('admindept.admin-analist-title')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Administrationdept/erick-figueroa.png')}}" alt="{{trans('admindeptadmin-aux-equiv-title')}}" style="max-width: 8em; height: 10.75em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('admindept.admin-aux-equiv')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('admindept.admin-aux-equiv-title')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Administrationdept/jose-subero.png')}}" alt="Asistente" style="max-width: 8em; height: 10.75em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('admindept.admin-aux-servest')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('admindept.admin-aux-serviest-title')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content justify-content-around content-vext mx-4 mb-4">
            <div class="row justify-content-center mx-4">
                {{-- functions --}}
                <div class="col-sm-3 col-md-3 my-2"
                     data-toggle="collapse" href="#collapse1" role="button"
                     aria-expanded="false"
                     aria-controls="collapse4">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/admindept/Admin-03.png')}}" width="75%">
                    </a>
                </div>
                {{-- organigram --}}
{{--                <div class="col-sm-3 col-md-3 my-2"--}}
{{--                     data-toggle="collapse" href="#collapse2" role="button"--}}
{{--                     aria-expanded="false"--}}
{{--                     aria-controls="collapse5">--}}
{{--                    <a id="campusbtn">--}}
{{--                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/admindept/Admin-05.png')}}" width="75%">--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
        </div>
        {{-- functions --}}
        <div class="collapse mx-4" id="collapse1">
            <div class="card border-0 card-body">
                <p class="card-text text-left font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('studyctrl.ctrl-function-title')}}
                </p>
                <ul class="text-justify">
                    <li><p> {{trans('admindept.function-1')}}</p></li>
                    <li><p> {{trans('admindept.function-2')}}</p></li>
                    <li><p> {{trans('admindept.function-3')}}</p></li>
                    <li><p> {{trans('admindept.function-4')}}</p></li>
                    <li><p> {{trans('admindept.function-5')}}</p></li>
                    <li><p> {{trans('admindept.function-6')}}</p></li>
                    <li><p> {{trans('admindept.function-7')}}</p></li>
                </ul>
            </div>
        </div>
        {{-- organigram --}}
        <div class="collapse m-4" id="collapse2">
            <p class="card-text text-left font-weight-bold mx-4" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                {{trans('studyctrl.ctrl-organigram')}}
            </p>
            <div class="card-body border-0 m-4">
                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/studyctrl/orgctrl.png')}}" width="50%">
            </div>
        </div>
    </div>
@endsection
