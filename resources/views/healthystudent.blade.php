@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{asset('./image/banners/'.trans('commons.lang-banner').'/student-help/healthyestudents.jpg')}}" alt="{{trans('home.students-healthy')}}" width="100%">
        </div>
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/health-student/Bien-02.png')}}"><h4>{{trans('home.students-healthy')}}</h4>
            </div>
        </div>
        {{-- cards presentation --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Healthystudent/angelina-yanez.png')}}" alt="{{trans('studyctrl.ctrl-asist-title')}}" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('healthy.health-author')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('healthy.health-author-title')}}</p>
                                <p class="card-text fs-6 font-weight-bold">{{trans('healthy.health-helps-title')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('healthy.health-author-email')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Healthystudent/iraida-hernandez.png')}}" alt="{{trans('studyctrl.ctrl-chief')}}" style="max-width: 8em; height: 10.75em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('healthy.health-asist')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('healthy.health-atitle')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('healthy.health-asitmail')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--contents--}}
        <div class="content justify-content-around m-4 content-vext">
            <div class="row justify-content-around">
                {{--Description--}}
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                     aria-controls="collapse1">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/health-student/Bien-03.png')}}" width="75%">
                    </a>
                </div>
                {{-- Objetives --}}
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/health-student/Bien-10.png')}}" width="75%">
                    </a>
                </div>
                {{--units ads--}}
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
                     aria-controls="collapse4">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/health-student/Bien-04.png')}}" width="75%">
                    </a>
                </div>
            </div>
        </div>
        {{--contents cards bodies--}}
        <div class="content justify-content-around flex-column m-4" id="contevext">
            {{--description--}}
            <div class="collapse my-4" id="collapse">
                <div class="card border-0 card-body sectionbody">
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('healthy.health-title')}}
                    </p>
                    <p class="text-justify"> {{trans('healthy.health-descrip')}}</p>
                </div>
            </div>
            {{-- Objetives --}}
            <div class="collapse my-4" id="collapse2">
                <div class="card border-0 card-body sectionbody">
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('healthy.health-obj-title')}}
                    </p>
                    <p class="text-justify"> {{trans('healthy.health-obj')}}</p>
                </div>
            </div>
            {{--Departaments--}}
            <div class="collapse" id="collapse4">
                <div class="content mx-4">
                    <p class="card-text font-weight-bold text-justify mx-4" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('healthy.health-depts')}}</p>
                    <div class="d-flex justify-content-center">
                        <div class="col-sm-4 col-md-4 m-2 border-0" data-toggle="collapse"
                             href="#collapse5" role="button" aria-expanded="false"
                             aria-controls="collapse5">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/health-student/Bien-05.png')}}" width="65%">
                            </a>
                        </div>
                        <div class="col-sm-4 col-md-4 m-2 border-0"  data-toggle="collapse"
                             href="#collapse6" role="button" aria-expanded="false"
                             aria-controls="collapse6">
                            <a id="link-subsystem" href="{{url('/healthymental')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/health-student/Bien-06.png')}}" width="65%">
                            </a>
                        </div>
                        {{--links interest--}}
                        <div class="col-sm-4 col-md-4 m-2 border-0" data-toggle="collapse"
                             href="#collapse7" role="button" aria-expanded="false"
                             aria-controls="collapse7">
                            <a id="link-subsystem">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/health-student/Bien-07.png')}}" width="65%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content text-justify justify-content-around flex-column m-4" id="contevext">
        {{--  Helps --}}
                <div class="collapse mx-4" id="collapse5">
                        <div class="card border-0 card-body sectionbody">
                                <p class="text-left font-weight-bold">{{trans('healthy.health-functions')}}&nbsp{{trans('healthy.health-author-title')}}</p>
                                <ul>
                                    <li><p>{{trans('healthy.health-functions-1')}}</p></li>
                                    <li><p>{{trans('healthy.health-functions-2')}}</p></li>
                                    <li><p>{{trans('healthy.health-functions-3')}}</p></li>
                                    <li><p>{{trans('healthy.health-functions-4')}}</p></li>
                                    <li><p>{{trans('healthy.health-functions-5')}}</p></li>
                                    <li><p>{{trans('healthy.health-functions-6')}}</p></li>
                                </ul>
                        </div>
                    </div>
                <div class="collapse mx-4" id="collapse6">
                    <div class="card border-0 card-body sectionbody">
                            <p class="text-left font-weight-bold">{{trans('healthy.health-functions')}}&nbsp{{trans('healthy.health-atitle')}}</p>
                            <ul>
                                <li><p>{{trans('healthy.health-functions-7')}}</p></li>
                                <li><p>{{trans('healthy.health-functions-8')}}</p></li>
                                <li><p>{{trans('healthy.health-functions-9')}}</p></li>
                            </ul>
                    </div>
                </div>
        </div>
        {{--links interest--}}
      <div class="content justify-content-around m-4" id="contevext">
            <div class="collapse" id="collapse7">
                <div class="container m-4">
                    <p class="text-justify" style="font-size: 1.25rem; font-weight: 600; color: #000;">{{trans('healthy.health-links')}}</p>
                </div>
                <div class="content">
                    <div class="row justify-content-center">
                        {{--Gazzete--}}
                        <div class="col-sm-4 col-md-4 m-2 border-0">
                            <a id="link-subsystem" href="{{url('/oficialgazzette')}}">
                                <img  src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/health-student/Bien-08.png')}}" width="40%">
                            </a>
                        </div>
                        {{--reports--}}
                        <div class="col-sm-4 col-md-4 m-2 border-0">
                            <a id="link-subsystem" href="{{url('')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/health-student/Bien-09.png')}}" width="40%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--Help's Banner--}}
        <div class="d-flex mt-4">
            <div class="d-flex justify-content-start">
                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/health-student/Bien_Banner.jpg')}}" width="100%">
            </div>
        </div>
        {{--Information--}}
        <div class="d-flex m-4 card border-0 card-body text-left">
            <h5 class="font-weight-bold">{{trans('postgrade.postg-info-title')}}</h5>
            <div class="flex-row">
                <p><b>{{trans('healthy.health-info-etitle')}}</b></p><p id="name-funders">&nbsp {{trans('healthy.health-info-email')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('healthy.health-info-teltit')}}</b></p><p id="name-funders">&nbsp{{trans('healthy.health-info-telf')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('healthy.health-info-schedtit')}}</b></p><p id="name-funders">&nbsp{{trans('healthy.health-info-sched')}}</p>
            </div>
        </div>
    </div>
@endsection
