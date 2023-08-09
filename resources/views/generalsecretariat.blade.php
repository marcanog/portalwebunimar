@extends('layouts.layout')

@section ('content')
    <div class="content">
{{--        banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/secretariat/generalsecretary.jpg')}}">
        </div>
{{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/secretariat/Secretaria-02.png')}}"><h4>{{trans('commons.general-secretary')}}</h4>
            </div>
        </div>
{{--        presentations cards --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Secretariat/secretariat.jpg')}}" alt="{{trans('secretarygeneral.secretaryofic-author-title')}}" style="max-width: 8em;height: 10.75em;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('secretarygeneral.secretaryofic-author')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('secretarygeneral.secretaryofic-author-title')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('secretarygeneral.secretaryofic-author-email')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Secretariat/asistent.jpg')}}" alt="{{trans('secretarygeneral.secretaryofic-author-title')}}" style="max-width: 8em;height: 10.75em;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('secretarygeneral.secretaryofic-asist')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('secretarygeneral.secretaryofic-atitle')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('secretarygeneral.secretaryofic-asitmail')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        content information --}}
        <div class="content justify-content-around m-4 content-vext">
            <div class="row justify-content-around">
                {{--Vision--}}
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                     aria-controls="collapse1">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/secretariat/Secretaria-03.png')}}" width="75%">
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="campusbtn">
                        <img src="{{URL::asset('/image/views/'.trans('commons.lang-banner').'/secretariat/Secretaria-04.png')}}" width="75%">
                    </a>
                </div>
                {{--units ads--}}
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                     aria-controls="collapse4">
                    <a id="campusbtn">
                        <img src="{{URL::asset('/image/views/'.trans('commons.lang-banner').'/secretariat/Secretaria-05.png')}}" width="75%">
                    </a>
                </div>
            </div>
        </div>

        {{--cards bodies--}}
        <div class="content justify-content-around flex-column m-4" id="contevext">
            {{--descripction--}}
            <div class="collapse m-4" id="collapse">
                <p class="card border-0 card-body text-justify card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('secretarygeneral.secretaryofic-title')}}
                </p>
                <div class="card border-0 card-body sectionbody">
                    <p class="text-justify"> {{trans('secretarygeneral.secretaryofic-obj')}}</p>
                    <p class="text-justify"> {{trans('secretarygeneral.secretaryofic-obj-2')}}</p>
                    <p class="text-justify"> {{trans('secretarygeneral.secretaryofic-obj-3')}}</p>
                    <p class="text-justify"> {{trans('secretarygeneral.secretaryofic-obj-4')}}</p>
                </div>
            </div>
            {{--functions--}}
            <div class="collapse m-4" id="collapse3">
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('secretarygeneral.secretaryofic-functions')}}
                    </p>
                    <ul>
                        <li><p> {{trans('secretarygeneral.secretaryofic-functions-2')}}</p></li>
                        <li><p> {{trans('secretarygeneral.secretaryofic-functions-3')}}</p></li>
                        <li><p> {{trans('secretarygeneral.secretaryofic-functions-4')}}</p></li>
                        <li><p> {{trans('secretarygeneral.secretaryofic-functions-5')}}</p></li>
                        <li><p> {{trans('secretarygeneral.secretaryofic-functions-6')}}</p></li>
                        <li><p> {{trans('secretarygeneral.secretaryofic-functions-7')}}</p></li>
                        <li><p> {{trans('secretarygeneral.secretaryofic-functions-8')}}</p></li>
                        <li><p> {{trans('secretarygeneral.secretaryofic-functions-9')}}</p></li>
                    </ul>
                </div>
            </div>
            {{--Departaments--}}
            <div class="collapse m-4" id="collapse4">
                    <p class="text-justify card-text font-weight-bold m-4" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('secretarygeneral.secretaryofic-depts')}}</p>
                    <div class="row justify-content-center m-4">
                        <div class="col-md-3 col-sm-3 border-0 my-2">
                            <a id="link-subsystem" href="{{url('/controlstudies')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/secretariat/Secretaria-06.png')}}" width="85%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 border-0 my-2">
                            <a id="link-subsystem" href="{{url('/healthystudent')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/secretariat/Secretaria-07.png')}}" width="85%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 border-0 my-2">
                            <a id="link-subsystem" href="{{url(' ')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/secretariat/Secretaria-08.png')}}" width="85%">
                            </a>
                        </div>
                        {{--links interest--}}
                        <div class="col-md-3 col-sm-3 border-0 my-2" data-toggle="collapse"
                             href="#collapseExample" role="button" aria-expanded="false"
                             aria-controls="collapseExample">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/secretariat/Secretaria-09.png')}}" width="85%">
                            </a>
                        </div>
                    </div>
            </div>
            {{--units ads to depts--}}
            <div class="content-areas d-flex justify-content-around" id="contevac">
                <div class="collapse" id="collapseExample">
                    <div class="row justify-content-around m-4">
                        <div class="col-md-3 col-sm-3 my-2">
                            <a id="link-subsystem" href="{{url('/oficialgazzette')}}"><img
                                    src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/secretariat/Secretaria-10.png')}}" width="75%"></a>
                        </div>
                        <div class="col-md-3 col-sm-3 my-2">
                            <a id="link-subsystem" href="{{url('/healthymental')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/secretariat/Secretaria-11.png')}}" width="75%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 my-2">
                            <a id="link-subsystem" href="{{url('/healthystudent')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/secretariat/Secretaria-12.png')}}" width="75%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex m-4 card border-0 card-body text-left">
            <h5 class="font-weight-bold">{{trans('rectorade.rector-info')}}</h5>
            <div class="flex-row">
                <p><b>{{trans('secretarygeneral.secretaryofic-info-etitle')}}</b></p><p id="name-funders">&nbsp{{trans('secretarygeneral.secretaryofic-info-email')}}</p>
            </div>
            <div class="flex-row">
                <p> <b>{{trans('secretarygeneral.secretaryofic-info-teltit')}}</b></p><p id="name-funders">&nbsp{{trans('secretarygeneral.secretaryofic-info-telf')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('secretarygeneral.secretaryofic-info-schedtit')}}</b></p><p id="name-funders">&nbsp{{trans('secretarygeneral.secretaryofic-info-sched')}}</p>
            </div>
        </div>

    </div>
@endsection
