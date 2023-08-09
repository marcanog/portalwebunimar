@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/'.trans('commons.lang-banner').'/reg-students/students.jpg')}}">
        </div>
        {{--Section info--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/regstudents/EsRe-02.png')}}">
                <h4>{{trans('regstudents.regstudent-title')}}</h4>
            </div>
        </div>
        {{--contents--}}
        <div class="d-inline-flex justify-content-around m-4 content-vext">
            <div class="row justify-content-around">
                {{--pregrade--}}
                <div class="col-sm-4 col-md-4 my-2" role="button">
                    <a href="{{url('/pregrade')}}" id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/regstudents/EsRe-04.png')}}" width="80%">
{{--                        <span>{{trans('newstudents.n-pregrade')}}</span>--}}
                    </a>
                </div>
                {{--grades models--}}
                <div class="col-sm-4 col-md-4 my-2" role="button">
                    <a id="foundbtn" href="{{URL('/degreemodality')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/regstudents/EsRe-09.png')}}" width="80%">
{{--                        <span>{{trans('regstudents.regstudents-gradesmodels')}}</span>--}}
                    </a>
                </div>
                {{--postgrade--}}
{{--                <div class="col-sm-3 col-md-3 my-2" role="button">--}}
{{--                    <a href="{{url('/postgrade')}}" id="campusbtn">--}}
{{--                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/regstudents/EsRe-05.png')}}" width="80%">--}}
{{--                    </a>--}}
{{--                </div>--}}
                {{--Alumni--}}
                <div class="col-sm-4 col-md-4 my-2" role="button">
                    <a id="foundbtn" href="{{url('/services')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/regstudents/EsRe-06.png')}}" width="80%">
{{--                        <span>{{trans('regstudents.regstudents-alumni')}}</span>--}}
                    </a>
                </div>
            </div>
        </div>
        {{--card bodies--}}
        <div class="collapse col-md-12" id="collapse">
            <div class="container col-md-12">
                <p style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('regstudents.regstudents-gradesmodels')}}</p>
                <div class="content-areas">
                    <div class="conten-subsytem" style="background-color: #6699cc;" data-toggle="collapse"
                         href="#collapse4" role="button" aria-expanded="false"
                         aria-controls="collapse4">
                        <a id="link-subsystem">
                            <img src="{{URL::asset('image/analisys.png')}}">
                            <span>{{trans('regstudents.r-profpractices')}}</span>
                        </a>
                    </div>
                    <div class="conten-subsytem" style="background-color: #6699cc;" data-toggle="collapse"
                         href="#collapse5" role="button" aria-expanded="false"
                         aria-controls="collapse5">
                        <a id="link-subsystem">
                            <img src="{{URL::asset('image/analisys.png')}}">
                            <span>{{trans('regstudents.r-investigation')}}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
