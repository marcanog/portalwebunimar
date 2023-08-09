@extends('layouts.layout')

@section ('content')
    <div class="content">
        {{-- main banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/deansoffice/CEYS/ceysdean.jpg')}}" width="100%" alt="{{trans('ceys.title')}}">
        </div>
        {{--    section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceys/CsEyS-05.png')}}"><h4>{{trans('ceys.title')}}</h4>
            </div>
        </div>
        <!-- Information depto -->
        {{-- cards presentations --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/CEYS/veronica-ruiz.png')}}" alt="{{trans('ceys.chief-role')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('ceys.chief-name')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('ceys.chief-role')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('ceys.chief-mail')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/CEYS/egibell-marin.png')}}" alt="{{trans('ceys.asist-role')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('ceys.asist-name')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('ceys.asist-role')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('ceys.asist-mail')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- content information --}}
        <div class="d-flex justify-content-around content-vext m-4">
            <div class="col-sm-4 col-md-4 my-2" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
                <a id="foundbtn">
                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceys/CsEyS-02.png')}}" width="75%"> {{--mission--}}
                </a>
            </div>
            <div class="col-sm-4 col-md-4 my-2" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse3">
                <a id="campusbtn">
                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceys/CsEyS-03.png')}}" width="75%">{{--admin perfil--}}
                </a>
            </div>
            <div class="col-sm-4 col-md-4 my-2">
                <a id="campusbtn" href="{{URL('/degreemodality')}}">
                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceys/CsEyS-04.png')}}" width="75%">{{--Departamentos--}}
                </a>
            </div>
        </div>
        {{--contents infos degree and departament--}}
            <div class="collapse mx-4" id="collapse">
                <p class="card-body font-weight-bold text-left" id="name-funders"  style="font-size: 1.25rem; font-weight: 600;">{{trans('ceys.ceys-mission-title')}}</p>
                <div class="card-text border-0 text-justify sectionbody">
                    <p> {{trans('ceys.ceys-mission')}}</p>
                </div>
            </div>
            <div class="collapse mx-4" id="collapse2">
                <p class="card-body font-weight-bold text-left" id="name-funders"  style="font-size: 1.25rem; font-weight: 600;">{{trans('ceys.ceys-offers')}}</p>
                <div class="card border-0 card-text text-justify">
                    <div class="row justify-content-center m-2">
                        <div class="col-sm-4 col-md-4" role="button">
                            <a href="{{url('/career/ceys/administration')}}" id="foundbtn">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceys/CeyS-04.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-sm-4 col-md-4" data-toggle="collapse" href="" role="button" aria-expanded="false" aria-controls="collapse">
                            <a href="{{url('/career/ceys/publicaccounting')}}" id="foundbtn">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceys/CeyS-05.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-sm-4 col-md-4" data-toggle="collapse" href="" role="button" aria-expanded="false" aria-controls="collapse">
                            <a href="{{url('/administration-mention-csf')}}" id="foundbtn">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ceys/CsEyS-06.png')}}" width="65%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {{--Contact info--}}
        <div class="d-flex m-4 card border-0 card-body text-left">
            <h5 class="font-weight-bold">{{trans('ceys.ceys-info')}}</h5>
            <div class="flex-row">
                <p><b>{{trans('ceys.ceys-mail-title')}}</b></p><p id="name-funders">&nbsp {{trans('ceys.cey-mail')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('ceys.ceys-telf-title')}}</b></p><p id="name-funders">&nbsp{{trans('ceys.cey-phone')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('ceys.ceys-sched-title')}}</b></p><p id="name-funders">&nbsp{{trans('ceys.ceys-sched')}}</p>
            </div>
        </div>
    </div>
@endsection
