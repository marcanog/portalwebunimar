@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/our-institution/ourinstitution.jpg')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ourinstitute/Inst-02.png')}}">
                <h4>{{trans('home.our-intstitution')}}</h4>
            </div>
        </div>
        <div class="content justify-content-around m-4 content-vext">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-4 my-2">
                    <a type="nav-link" style="cursor: pointer" data-toggle="modal" data-target="#modal1" class="open-modal"
                       data-open="modal1">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ourinstitute/Inst-03.png')}}" width="75%"></a>
                </div> {{--our concept--}}
                @include('institution-modal')
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                     aria-controls="collapse1"> {{--mission content--}}
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ourinstitute/Inst-04.png')}}" width="75%">
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                     aria-controls="collapse2"> {{--vision content--}}
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ourinstitute/Inst-05.png')}}" width="75%"></a>
                    </a>
                </div>
                <div class="collapse" id="collapse">
                    <div class="card-body text-justify">
                        <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('ourinstitute.our-mission-title')}}
                        </p>
                        <ul>
                            <div>
                                <li><p> {{trans('ourinstitute.our-mission-1')}}</p></li>
                                <li><p> {{trans('ourinstitute.our-mission-2')}}</p></li>
                                <li><p> {{trans('ourinstitute.our-mission-3')}}</p></li>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="collapse border-0 mx-4" id="collapse2">
                    <div class="card-body text-justify">
                        <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                            {{trans('ourinstitute.our-vision-title')}}
                        </p>
                        <ul>
                            <div>
                                <li><p> {{trans('ourinstitute.our-vision-1')}}</p></li>
                                <li><p> {{trans('ourinstitute.our-vision-2')}}</p></li>
                                <li><p> {{trans('ourinstitute.our-vision-3')}}</p></li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content justify-content-around m-4 content-vext">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-4 my-2">
                    <a href="{{url('/ourhistory')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ourinstitute/Inst-06.png')}}" width="75%"></a>
                </div>
                <div class="col-sm-4 col-md-4 my-2">
                    <a href="{{url('/simbology')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ourinstitute/Inst-07.png')}}" width="75%"></a>
                </div>
                <div class="col-sm-4 col-md-4 my-2">
                    <a href="{{URL('/organization')}}">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/ourinstitute/Inst-08.png')}}" width="75%"></a>
                </div>
            </div>
        </div>
        {{--card body--}}
{{--        <div class="d-inline-flex justify-content-around flex-column border-0 mx-4 mt-4" id="contevext">--}}
{{--            <div class="collapse" id="collapse">--}}
{{--                <div class="card-body text-justify">--}}
{{--                    <p style="font-size: 1.25rem; font-weight: 600;">--}}
{{--                        {{trans('ourinstitute.our-mission-title')}}--}}
{{--                    </p>--}}
{{--                    <ul>--}}
{{--                        <div class="sectionbody">--}}
{{--                            <li><p> {{trans('ourinstitute.our-mission-1')}}</p></li>--}}
{{--                            <li><p> {{trans('ourinstitute.our-mission-2')}}</p></li>--}}
{{--                            <li><p> {{trans('ourinstitute.our-mission-3')}}</p></li>--}}
{{--                        </div>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="collapse border-0 mx-4" id="collapse2">--}}
{{--            <div class="card-body text-justify">--}}
{{--                <p style="font-size: 1.25rem; font-weight: 600;">--}}
{{--                    {{trans('ourinstitute.our-vision-title')}}--}}
{{--                </p>--}}
{{--                <ul>--}}
{{--                    <div class="sectionbody">--}}
{{--                        <li><p> {{trans('ourinstitute.our-vision-1')}}</p></li>--}}
{{--                        <li><p> {{trans('ourinstitute.our-vision-2')}}</p></li>--}}
{{--                        <li><p> {{trans('ourinstitute.our-vision-3')}}</p></li>--}}
{{--                    </div>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
