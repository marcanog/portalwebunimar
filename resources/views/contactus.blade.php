@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/contactus/contactus.jpg')}}" width="100%">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/logo-unimar.png')}}"><h4>{{trans('commons.contactus')}}</h4>
            </div>
        </div>
        <div class="content m-4">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-md-6">
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.studyctrl')}}</p>
                        <div class="flex-row">
                            <p><b>{{trans('studyctrl.ctrl-email-title')}}</b></p><p id="name-funders">&nbsp {{trans('studyctrl.ctrl-email')}}</p>
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.communy_serv')}}</p>
                        <div class="flex-row">
                            <p><b>{{trans('communityserv.serv-info-email-title')}}</b></p>
                            <p id="name-funders">&nbsp{{trans('communityserv.serv-info-email')}}</p>
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.cjyp')}}</p>
                        <div class="flex-row">
                            <p><b>{{trans('cjyp.cjyp-mail-title')}}</b></p><p id="name-funders">&nbsp {{trans('cjyp.cjyp-mail')}}</p>
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.ceys')}}</p>
                        <div class="flex-row">
                            <p><b>{{trans('ceys.ceys-mail-title')}}</b></p><p id="name-funders">&nbsp {{trans('ceys.cey-mail')}}</p>
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.ing')}}</p>
                        <div class="flex-row">
                            <p><b>{{trans('engineering.deaneng-info-etitle')}}</b></p>
                            <p id="name-funders">&nbsp{{trans('engineering.deaneng-info-email')}}</p>
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.estgen')}}</p>
                        <div class="flex-row">
                            <p><b>{{trans('engineering.deaneng-info-etitle')}}</b></p>
                            <p id="name-funders">&nbsp {{trans('estgen.info-mail')}}</p>
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.humarte')}}</p>
                        <div class="flex-row">
                            <p><b>{{trans('engineering.deaneng-info-etitle')}}</b></p><p id="name-funders">&nbsp {{trans('humarte.hum-mail')}}</p>
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.deptoinv')}}</p>
                        <div class="flex-row">
                            <p><b>{{trans('engineering.deaneng-info-etitle')}}</b></p>
                            <p id="name-funders">&nbsp{{trans('dptoinvestigation.dinvest-info-email')}}</p>
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.deptopostg')}}</p>
                        <div class="flex-row">
                            <p><b>{{trans('postgrade.postg-info-etitle')}}</b></p>
                            <p id="name-funders">&nbsp{{trans('postgrade.postg-info-email')}}</p>
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.curriculum')}}</p>
                        <div class="flex-row">
                            <p><b>{{trans('comcurricula.department-info-email-title')}}</b></p><p id="name-funders">&nbsp{{trans('comcurricula.department-info-email')}}</p>
                        </div>
                    </div>             </div>
                <div class="col-sm-6 col-md-6">
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.healthystudent')}}</p>
                        <div class="flex-row">
                            <p><b>{{trans('healthy.health-info-etitle')}}</b></p><p id="name-funders">&nbsp {{trans('healthy.health-info-email')}}</p>
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.soccom')}}</p>
                        <div class="flex-row">
                            {{--                            <p><b>{{trans('comcurricula.department-info-email-title')}}</b></p><p id="name-funders">&nbsp{{trans('comcurricula.department-info-email')}}</p>--}}
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.viceacad')}}</p>
                        <div class="flex-row">
                            <p><b>{{trans('vacademy.vacad-info-etitle')}}</b></p><p id="name-funders">&nbsp {{trans('vacademy.vacad-info-email')}}</p>
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.viceext')}}</p>
                        <div class="flex-row">
                            <p><b>{{trans('vextension.vext-info-etitle')}}</b></p>
                            <p id="name-funders">&nbsp{{trans('vextension.vext-info-email')}}</p>
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.general-secretary')}}</p>
                        <div class="flex-row">
                            <p><b>{{trans('secretarygeneral.secretaryofic-info-etitle')}}</b></p><p id="name-funders">&nbsp{{trans('secretarygeneral.secretaryofic-info-email')}}</p>
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.rectorade')}}</p>
                        <div class="flex-row">
                            <p><b>{{trans('rectorade.rector-email-title')}}</b><p><p id="name-funders">&nbsp{{trans('rectorade.rector-email')}}</p>
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.rrhh')}}</p>
                        <div class="flex-row">
                            <p><b>{{trans('rrhh.email-title')}}</b></p><p id="name-funders">&nbsp {{trans('rrhh.email')}}</p>
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.deptoadmin')}}</p>
                        <div class="flex-row">
{{--                            <p><b>{{trans('comcurricula.department-info-email-title')}}</b></p><p id="name-funders">&nbsp{{trans('comcurricula.department-info-email')}}</p>--}}
                        </div>
                    </div>
                    <div class="text-left ">
                        <p class="fs-6 text-left font-weight-bold" id="name-funders">{{trans('commons.lloby')}}</p>
                        <div class="flex-row">
{{--                            <p><b>{{trans('comcurricula.department-info-email-title')}}</b></p><p id="name-funders">&nbsp{{trans('comcurricula.department-info-email')}}</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="banner-main my-4">--}}
{{--            <img src="{{URL::asset('/image/banners/'.trans('commons.lang-banner').'/construction.jpg')}}">--}}
{{--        </div>--}}
    </div>
@endsection
