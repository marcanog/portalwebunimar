@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('image/banners/'.trans('commons.lang-banner').'/serv-com/comunityservices.jpg')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/serv_com/serCom-02.png')}}">
                <h4>{{trans('communityserv.title')}}</h4>
            </div>
        </div>
        {{--cards presentations --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/communityserv/manuel-silva.png')}}" alt="{{trans('studyctrl.ctrl-asist-title')}}" style="max-width: 8em; height: 10.25em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('communityserv.coord-name')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('communityserv.coord-rol')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('communityserv.coord-mail')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4 invisible">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/avatar.svg')}}" alt="{{trans('communityserv.ctrl-asist-title')}}" style="max-width: 8em; height: 10.25em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('communityserv.deaneng-asist')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('communityserv.deaneng-asist-title')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('communityserv.deaneng-asist-mail')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--content information --}}
        <div class="d-flex justify-content-around m-4 content-vext">
            <div class="row justify-content-around">
                <div class="col-sm-3 col-md-3 my-2" data-toggle="collapse" href="#collapse"
                     role="button" aria-expanded="false" aria-controls="collapse">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/serv_com/serCom-03.png')}}" width="85%">
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2" data-toggle="collapse" href="#collapse2"
                     role="button" aria-expanded="false" aria-controls="collapse2">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/serv_com/serCom-04.png')}}" width="85%">
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2" data-toggle="collapse" href="#collapse3"
                     role="button" aria-expanded="false" aria-controls="collapse2">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/serv_com/serCom-05.png')}}" width="85%">
                    </a>
                </div>
                <div class="col-sm-3 col-md-3 my-2" data-toggle="collapse" href="#collapse4"
                     role="button" aria-expanded="false" aria-controls="collapse2">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/serv_com/serCom-06.png')}}" width="85%">
                    </a>
                </div>
{{--                <div class="col-sm-3 col-md-3 my-2" role="button">--}}
{{--                    <a id="campusbtn" href="{{URL('/degreemodality')}}">--}}
{{--                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/engineering/Ing-04.png')}}" width="80%">--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
        </div>
        {{--contents informations --}}
        <div class="d-flex justify-content-around flex-column m-4">
            <div class="collapse mx-4" id="collapse">
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">{{trans('communityserv.our-system')}}</p>
                    <ul>
                        <p> {{trans('communityserv.serv_comun')}}</p>
                    </ul>
                </div>
            </div>
            <div class="collapse mx-4" id="collapse2">
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">{{trans('communityserv.ambi-title')}}</p>
                    <ul>
                        <p> {{trans('communityserv.ambi-desc')}} </p>
                    </ul>
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">{{trans('communityserv.time_serv')}}</p>
                    <ul>
                        <p> {{trans('communityserv.time_desc')}} </p>
                    </ul>
                </div>
            </div>
            <div class="collapse mx-4" id="collapse3">
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('communityserv.princ_serv')}}</p>
                    <ul>
                        <li><p> {{trans('communityserv.princ_serv_1')}} </p></li>
                        <li><p> {{trans('communityserv.princ_serv_2')}} </p></li>
                        <li><p> {{trans('communityserv.princ_serv_3')}} </p></li>
                        <li><p> {{trans('communityserv.princ_serv_4')}} </p></li>
                        <li><p> {{trans('communityserv.princ_serv_5')}} </p></li>
                        <li><p> {{trans('communityserv.princ_serv_6')}} </p></li>
                        <li><p> {{trans('communityserv.princ_serv_7')}} </p></li>
                        <li><p> {{trans('communityserv.princ_serv_8')}} </p></li>
                    </ul>
                </div>
            </div>
            <div class="collapse mx-4" id="collapse4">
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('communityserv.obj_serv_title')}}</p>
                    <ul>
                        <li><p> {{trans('communityserv.obj_serv_1')}} </p></li>
                        <li><p> {{trans('communityserv.obj_serv_2')}} </p></li>
                        <li><p> {{trans('communityserv.obj_serv_3')}} </p></li>
                    </ul>
                </div>
            </div>
        {{-- content info contact--}}
        <div class="d-flex justify-content-around m-4 border-0 text-left card card-body">
            <h5 class="font-weight-bold">{{trans('engineering.deaneng-info-title')}}</h5>
            <div class="flex-row">
                <p><b>{{trans('communityserv.serv-info-email-title')}}</b></p>
                <p id="name-funders">&nbsp{{trans('communityserv.serv-info-email')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('communityserv.serv-info-telf-title')}}</b></p>
                <p id="name-funders">&nbsp{{trans('communityserv.serv-info-telf')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('communityserv.serv-info-sched-title')}}</b></p>
                <p id="name-funders">&nbsp{{trans('communityserv.serv-info-sched')}}</p>
            </div>
        </div>
    </div>
@endsection
